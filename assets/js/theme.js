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

  /* ---- three-step quote form ---- */
  var form = $("brief");
  if(form){
    var names = {1:"Step 1 of 3 &middot; What you need", 2:"Step 2 of 3 &middot; The project", 3:"Step 3 of 3 &middot; Your details"};
    var times = {1:"about a minute", 2:"halfway there", 3:"last one"};
    var at = 1;
    function show(n){
      at = n;
      $("s1").hidden = n !== 1; $("s2").hidden = n !== 2; $("s3").hidden = n !== 3;
      $("barFill").style.width = (n / 3 * 100) + "%";
      $("stepName").innerHTML = names[n];
      $("stepTime").textContent = times[n];
    }
    function picked(){
      var out = [];
      Array.prototype.forEach.call(document.querySelectorAll(".pick input:checked"), function(i){ out.push(i.value); });
      return out;
    }
    Array.prototype.forEach.call(document.querySelectorAll("[data-next]"), function(b){
      b.addEventListener("click", function(){
        var to = parseInt(b.getAttribute("data-next"), 10);
        if(to === 2 && picked().length === 0){ $("e1").hidden = false; return; }
        $("e1").hidden = true;
        show(to);
        form.scrollIntoView({behavior: reduce ? "auto" : "smooth", block:"center"});
      });
    });
    Array.prototype.forEach.call(document.querySelectorAll("[data-back]"), function(b){
      b.addEventListener("click", function(){ show(parseInt(b.getAttribute("data-back"), 10)); });
    });
    form.addEventListener("submit", function(e){
      e.preventDefault();
      var name = $("f-name"), email = $("f-email"), err = $("e3");
      name.classList.remove("bad"); email.classList.remove("bad");
      if(!name.value.trim()){
        name.classList.add("bad"); err.textContent = "Add your name so we know who we are replying to.";
        err.hidden = false; name.focus(); return;
      }
      if(!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email.value)){
        email.classList.add("bad"); err.textContent = "That email address looks incomplete.";
        err.hidden = false; email.focus(); return;
      }
      err.hidden = true;
      var want = picked();
      var first = name.value.trim().split(/\s+/)[0];
      $("s1").hidden = true; $("s2").hidden = true; $("s3").hidden = true;
      $("barFill").style.width = "100%";
      $("stepName").innerHTML = "Brief complete";
      $("stepTime").textContent = "thanks";
      $("doneTitle").textContent = "Thanks, " + first + ".";
      $("doneText").textContent = "Your brief is ready. Connect this form to your inbox and it will land there, with a quote back inside 24 hours.";
      var rows = [
        ["Needs", want.join(", ") || "Not specified"],
        ["Timing", $("f-when").value],
        ["Company", $("f-co").value.trim() || "—"],
        ["Reply to", email.value.trim()]
      ];
      var html = "";
      for(var i = 0; i < rows.length; i++){
        html += '<div><em>' + rows[i][0] + '</em><span>' + String(rows[i][1]).replace(/</g,"&lt;") + '</span></div>';
      }
      $("recap").innerHTML = html;
      $("done").hidden = false;
      $("done").scrollIntoView({behavior: reduce ? "auto" : "smooth", block:"center"});
    });
  }

  var yr = $("yr"); if(yr) yr.textContent = new Date().getFullYear();
})();
