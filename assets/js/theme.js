(function(){
  "use strict";
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var $ = function(id){ return document.getElementById(id); };

  /* ---- nav + scroll progress ---- */
  var nav = $("nav"), prog = $("prog"), ticking = false;
  function paint(){
    var y = window.scrollY || 0;
    if(nav) nav.classList.toggle("stuck", y > 20);
    if(prog){
      var max = document.documentElement.scrollHeight - window.innerHeight;
      prog.style.transform = "scaleX(" + (max > 0 ? Math.min(y / max, 1) : 0) + ")";
    }
    ticking = false;
  }
  window.addEventListener("scroll", function(){
    if(!ticking){ ticking = true; window.requestAnimationFrame(paint); }
  }, {passive:true});
  paint();

  var burger = $("burger"), drawer = $("drawer");
  if(burger && drawer){
    burger.addEventListener("click", function(){
      var open = drawer.classList.toggle("open");
      burger.setAttribute("aria-expanded", open ? "true" : "false");
    });
    Array.prototype.forEach.call(drawer.querySelectorAll("a"), function(a){
      a.addEventListener("click", function(){
        drawer.classList.remove("open");
        burger.setAttribute("aria-expanded","false");
      });
    });
  }

  /* ---- FAQ ---- */
  Array.prototype.forEach.call(document.querySelectorAll(".q"), function(btn){
    btn.addEventListener("click", function(){
      var panel = btn.nextElementSibling;
      var isOpen = btn.getAttribute("aria-expanded") === "true";
      Array.prototype.forEach.call(document.querySelectorAll(".q"), function(b){
        b.setAttribute("aria-expanded","false");
        b.nextElementSibling.style.height = "0px";
      });
      if(!isOpen){
        btn.setAttribute("aria-expanded","true");
        panel.style.height = panel.firstElementChild.offsetHeight + "px";
      }
    });
  });
  window.addEventListener("resize", function(){
    var open = document.querySelector('.q[aria-expanded="true"]');
    if(open) open.nextElementSibling.style.height = open.nextElementSibling.firstElementChild.offsetHeight + "px";
  });

  /* ---- sliders ---- */
  function slider(railId, cardSel, dotsId, prevId, nextId){
    var rail = $(railId), dots = $(dotsId), prev = $(prevId), next = $(nextId);
    if(!rail || !dots || !prev || !next) return;
    var cards = rail.querySelectorAll(cardSel);
    if(!cards.length) return;
    var i = 0;
    for(var d = 0; d < cards.length; d++){
      (function(n){
        var b = document.createElement("button");
        b.className = "dot"; b.type = "button";
        b.setAttribute("aria-label", "Go to " + (n + 1));
        b.addEventListener("click", function(){ go(n); });
        dots.appendChild(b);
      })(d);
    }
    function step(){
      var w = cards[0].getBoundingClientRect().width;
      var gap = parseFloat(getComputedStyle(rail).columnGap || 0) || 0;
      return w + gap;
    }
    function go(n){
      i = Math.max(0, Math.min(n, cards.length - 1));
      rail.scrollTo({left: i * step(), behavior: reduce ? "auto" : "smooth"});
    }
    function dotPaint(){
      var n = Math.round(rail.scrollLeft / step());
      var maxLeft = rail.scrollWidth - rail.clientWidth - 2;
      for(var k = 0; k < dots.children.length; k++) dots.children[k].classList.toggle("on", k === n);
      prev.disabled = rail.scrollLeft <= 2;
      next.disabled = rail.scrollLeft >= maxLeft;
      i = n;
    }
    prev.addEventListener("click", function(){ go(i - 1); });
    next.addEventListener("click", function(){ go(i + 1); });
    rail.addEventListener("scroll", function(){ window.requestAnimationFrame(dotPaint); }, {passive:true});
    window.addEventListener("resize", dotPaint);
    dotPaint();
  }
  slider("revs", ".rev", "rDots", "rPrev", "rNext");

  /* ---- three-step quote form (Contact Form 7) ---- */
  var card = $("brief"), form = card && card.closest("form.wpcf7-form");
  if(form){
    var names = {1:"Step 1 of 3 &middot; What you need", 2:"Step 2 of 3 &middot; The project", 3:"Step 3 of 3 &middot; Your details"};
    var times = {1:"about a minute", 2:"halfway there", 3:"last one"};
    var at = 1;
    function show(n){
      at = n;
      $("s1").hidden = n !== 1; $("s2").hidden = n !== 2; $("s3").hidden = n !== 3;
      $("done").hidden = true;
      $("barFill").style.width = (n / 3 * 100) + "%";
      $("stepName").innerHTML = names[n];
      $("stepTime").textContent = times[n];
    }
    function picked(){
      var out = [];
      Array.prototype.forEach.call(card.querySelectorAll(".picks input:checked"), function(i){ out.push(i.value); });
      return out;
    }
    function next(to){
      if(to === 2 && picked().length === 0){ $("e1").hidden = false; return; }
      $("e1").hidden = true;
      show(to);
      card.scrollIntoView({behavior: reduce ? "auto" : "smooth", block:"center"});
    }
    Array.prototype.forEach.call(card.querySelectorAll("[data-next]"), function(b){
      b.addEventListener("click", function(){ next(parseInt(b.getAttribute("data-next"), 10)); });
    });
    Array.prototype.forEach.call(card.querySelectorAll("[data-back]"), function(b){
      b.addEventListener("click", function(){ show(parseInt(b.getAttribute("data-back"), 10)); });
    });
    card.addEventListener("change", function(e){
      if(e.target.closest(".picks") && picked().length) $("e1").hidden = true;
    });
    // Enter in an early step moves forward instead of sending a half-filled brief.
    form.addEventListener("keydown", function(e){
      if(e.key === "Enter" && at < 3 && e.target.tagName === "INPUT"){
        e.preventDefault(); next(at + 1);
      }
    });
    // Runs before Contact Form 7's own submit handler, so an incomplete
    // step 3 is caught here without a round trip to the server.
    document.addEventListener("submit", function(e){
      if(e.target !== form) return;
      if(at !== 3){ e.preventDefault(); e.stopPropagation(); next(at + 1); return; }
      var name = $("f-name"), email = $("f-email");
      name.classList.remove("bad"); email.classList.remove("bad");
      if(!name.value.trim()){
        e.preventDefault(); e.stopPropagation();
        name.classList.add("bad"); name.focus(); return;
      }
      if(!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email.value)){
        e.preventDefault(); e.stopPropagation();
        email.classList.add("bad"); email.focus();
      }
    }, true);
    // Server-side validation failed: jump to the step holding the first bad field.
    form.addEventListener("wpcf7invalid", function(){
      var bad = form.querySelector(".wpcf7-not-valid");
      var box = bad && bad.closest(".stepbox");
      if(box) show(parseInt(box.getAttribute("data-step"), 10));
    });
    form.addEventListener("wpcf7mailsent", function(e){
      var v = {}, needs = [];
      (e.detail.inputs || []).forEach(function(i){
        if(i.name === "needs[]") needs.push(i.value); else v[i.name] = i.value;
      });
      var first = String(v["your-name"] || "").trim().split(/\s+/)[0];
      $("s1").hidden = true; $("s2").hidden = true; $("s3").hidden = true;
      $("barFill").style.width = "100%";
      $("stepName").innerHTML = "Brief sent";
      $("stepTime").textContent = "thanks";
      $("doneTitle").textContent = first ? "Thanks, " + first + "." : "Thanks.";
      $("doneText").textContent = "Your brief is in. A fixed quote comes back to " + (v["your-email"] || "your inbox") + " inside 24 hours.";
      var rows = [
        ["Needs", needs.join(", ") || "Not specified"],
        ["Timing", v.when || "Not given"],
        ["Company", String(v.company || "").trim() || "Not given"],
        ["Reply to", v["your-email"] || "Not given"]
      ];
      var html = "";
      for(var i = 0; i < rows.length; i++){
        html += '<div><em>' + rows[i][0] + '</em><span>' + String(rows[i][1]).replace(/&/g,"&amp;").replace(/</g,"&lt;") + '</span></div>';
      }
      $("recap").innerHTML = html;
      $("done").hidden = false;
      $("done").scrollIntoView({behavior: reduce ? "auto" : "smooth", block:"center"});
    });
  }

  /* ---- post contents list ---- */
  var toc = document.querySelector(".post-toc");
  if(toc){
    var det = toc.querySelector("details");
    if(det && window.innerWidth < 900) det.removeAttribute("open");
    var links = toc.querySelectorAll("a"), map = {};
    Array.prototype.forEach.call(links, function(a){ map[a.getAttribute("href").slice(1)] = a; });
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(en){
          if(en.isIntersecting && map[en.target.id]){
            Array.prototype.forEach.call(links, function(l){ l.classList.remove("on"); });
            map[en.target.id].classList.add("on");
          }
        });
      }, {rootMargin:"-20% 0px -70% 0px"});
      Object.keys(map).forEach(function(id){ var h = document.getElementById(id); if(h) io.observe(h); });
    }
  }

  /* ---- analytics events for Google Tag Manager ----
     email_click / phone_click on any mailto: or tel: link, and
     generate_lead when the quote form sends. No names, emails or
     phone numbers typed by visitors are sent, only what was clicked
     and which services the brief asked about. */
  window.dataLayer = window.dataLayer || [];
  function where(el){
    if(el.closest("#drawer")) return "mobile_menu";
    if(el.closest("#nav, header")) return "header";
    if(el.closest("footer")) return "footer";
    if(el.closest("#dock")) return "mobile_bar";
    return "page";
  }
  document.addEventListener("click", function(e){
    var a = e.target.closest && e.target.closest('a[href^="mailto:"], a[href^="tel:"]');
    if(!a) return;
    var isMail = a.getAttribute("href").indexOf("mailto:") === 0;
    window.dataLayer.push({
      event: isMail ? "email_click" : "phone_click",
      link_url: a.getAttribute("href"),
      click_location: where(a),
      page_path: location.pathname
    });
  }, true);
  document.addEventListener("wpcf7mailsent", function(e){
    var d = e.detail || {}, needs = [], when = "";
    (d.inputs || []).forEach(function(i){
      if(i.name === "needs[]") needs.push(i.value);
      if(i.name === "when") when = i.value;
    });
    window.dataLayer.push({
      event: "generate_lead",
      form_id: String(d.contactFormId || ""),
      form_name: "quote_form",
      services: needs.join(", "),
      timeline: when,
      page_path: location.pathname
    });
  });

  var yr = $("yr"); if(yr) yr.textContent = new Date().getFullYear();
})();
