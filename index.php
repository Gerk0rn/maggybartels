<?php
// Passwortschutz: Seite erst nach Eingabe des Passworts anzeigen
header('X-Robots-Tag: noindex, nofollow, noarchive');
header('Cache-Control: private, no-store');
session_start();
$hash = '$2y$10$a/knHdcu8xPXQxDpt83xY.rlTfhPFnl2AENQMhJkSY/onXHLxvcVG';
$fehler = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['passwort'])) {
  if (password_verify($_POST['passwort'], $hash)) {
    session_regenerate_id(true);
    $_SESSION['zugang'] = true;
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'), true, 303);
    exit;
  }
  $fehler = true;
  usleep(800000);
}
if (empty($_SESSION['zugang'])):
?><!doctype html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow, noarchive">
<title>Thai Yoga Massage by Maggy Bartels</title>
<link rel="icon" href="favicon.ico" sizes="any">
<link rel="icon" href="favicon.svg" type="image/svg+xml">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&amp;family=Jost:wght@300;400;500&amp;display=swap" rel="stylesheet">
<style>
body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;background:#EFE8E3;font-family:'Jost',system-ui,sans-serif;color:#2F2A26}
form{background:#F5F0EC;border:1px solid #DCD1C8;padding:48px 40px;display:flex;flex-direction:column;align-items:center;gap:18px;width:min(360px,calc(100vw - 32px));box-sizing:border-box;text-align:center;animation:up .8s cubic-bezier(.2,.7,.2,1) both}
@keyframes up{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
h1{margin:0;font-family:'Cormorant Garamond',Georgia,serif;font-weight:500;font-size:24px;letter-spacing:.2em;color:#7A5C43}
p{margin:0;font-size:14px;color:#4A423C}
input{font:inherit;font-size:18px;text-align:center;letter-spacing:.3em;width:100%;box-sizing:border-box;border:none;border-bottom:1px solid #3A3430;background:transparent;padding:10px 2px;color:#2F2A26}
input:focus{outline:none;border-bottom-color:#8A6A4F}
button{font:inherit;background:#8A6A4F;color:#fff;border:none;padding:14px 32px;font-size:13px;letter-spacing:.22em;cursor:pointer;transition:transform .3s,background-color .3s,box-shadow .3s}
button:hover{background:#6E5340;transform:translateY(-3px);box-shadow:0 10px 22px -10px rgba(79,58,41,.6)}
.fehler{color:#A0412D}
</style>
</head>
<body>
<form method="post">
<svg width="72" height="54" viewBox="0 0 64 48" fill="none" stroke="#9A7A5E" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M32 6c-7 8-7 22 0 34 7-12 7-26 0-34z"/><path d="M32 40c-4-10-12-18-22-20 1 12 9 20 22 20z"/><path d="M32 40c4-10 12-18 22-20-1 12-9 20-22 20z"/><path d="M32 40C24 34 12 32 3 34c6 6 17 8 29 6z"/><path d="M32 40c8-6 20-8 29-6-6 6-17 8-29 6z"/></svg>
<h1>THAI YOGA MASSAGE</h1>
<p>Diese Seite ist noch nicht öffentlich.<br>Bitte gib das Passwort ein.</p>
<?php if ($fehler): ?><p class="fehler" role="alert">Das Passwort ist leider falsch.</p><?php endif; ?>
<label for="pw" style="position:absolute;left:-9999px">Passwort</label>
<input id="pw" type="password" name="passwort" inputmode="numeric" autocomplete="current-password" autofocus required>
<button type="submit">EINTRETEN</button>
</form>
</body>
</html>
<?php exit; endif; ?>
<!doctype html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="robots" content="noindex, nofollow, noarchive">
<title>Thai Yoga Massage by Maggy Bartels</title>
<meta name="description" content="Thai-Yoga-Massage by Maggy Bartels: sanfte Dehnung, rhythmischer Druck und achtsame Berührung. Kennenlern-Angebot 60 Minuten für 45 €.">
<link rel="icon" href="favicon.ico" sizes="any">
<link rel="icon" href="favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<meta name="theme-color" content="#EFE8E3">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&amp;family=Jost:wght@300;400;500&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="scrollcraft.css">
<style>
:root{
  --sc-canvas:#EFE8E3; --sc-surface:#F6F1ED;
  --sc-ink:#2F2A26; --sc-ink-soft:#5B5048;
  --sc-accent:#7E5F45; --sc-accent-ink:#FFFFFF;
  --sc-font-display:"Cormorant Garamond", Georgia, serif;
  --sc-font-text:"Jost", system-ui, sans-serif;
  --sc-shadow-color: 25 30% 25%;
  --brown:#7A5C43; --line:#9A7A5E; --wash:#E4D6CB; --rose:#E8D3C9;
}
body{font-weight:400}
.sc-grain{opacity:.035}
[hidden]{display:none!important}
a{color:inherit}
.sc-display{font-weight:500;letter-spacing:.01em;line-height:1.02}
.caps{font-size:var(--sc-t-xs);letter-spacing:.24em;text-transform:uppercase;color:var(--brown)}

/* ---------- buttons: one label, one shape ---------- */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:.6em;min-height:48px;padding:0 2em;
  font-size:.8rem;letter-spacing:.2em;text-transform:uppercase;text-decoration:none;white-space:nowrap;cursor:pointer;
  border:1px solid currentColor;background:transparent;color:var(--sc-ink);
  transition:transform 180ms var(--sc-ease-out),background-color 180ms var(--sc-ease-out),color 180ms var(--sc-ease-out),box-shadow 180ms var(--sc-ease-out)}
.btn--fill{background:var(--sc-accent);border-color:var(--sc-accent);color:var(--sc-accent-ink)}
.btn--light{background:#FFFFFF;border-color:#FFFFFF;color:#4F3A29}
.btn:active{transform:translateY(1px) scale(.98)}
@media (hover:hover) and (pointer:fine){
  .btn:hover{transform:translateY(-3px);box-shadow:0 12px 24px -12px hsl(25 35% 22% / .55)}
  .btn--fill:hover{background:#654A35;border-color:#654A35}
  .btn:not(.btn--fill):not(.btn--light):hover{background:var(--sc-ink);color:#fff;border-color:var(--sc-ink)}
  .btn--light:hover{background:var(--sc-ink);border-color:var(--sc-ink);color:#fff}
}

/* ---------- header ---------- */
.bar{position:fixed;inset:0 0 auto 0;z-index:var(--sc-z-chrome);display:flex;align-items:center;justify-content:space-between;gap:1rem;
  padding:.85rem var(--sc-gutter);background:color-mix(in oklab,var(--sc-canvas) 86%,transparent);
  backdrop-filter:saturate(1.1) blur(8px);-webkit-backdrop-filter:saturate(1.1) blur(8px);border-bottom:1px solid color-mix(in oklab,var(--sc-ink) 8%,transparent)}
.mark{display:flex;align-items:center;gap:.75rem;text-decoration:none;color:var(--brown)}
.mark span{font-family:var(--sc-font-display);font-size:1.15rem;font-weight:600;letter-spacing:.22em;white-space:nowrap;transition:letter-spacing 280ms var(--sc-ease-out)}
.mark svg{width:34px;height:26px;transform-origin:50% 85%}
@media (hover:hover) and (pointer:fine){.mark:hover svg{animation:sway 1.1s var(--sc-ease-in-out)}.mark:hover span{letter-spacing:.26em}}
@keyframes sway{25%{transform:rotate(-7deg)}75%{transform:rotate(7deg)}}
.bar .btn{min-height:42px;padding:0 1.4em}
@media (max-width:560px){.mark span{font-size:.92rem;letter-spacing:.14em}.bar .btn{padding:0 1em;font-size:.7rem;letter-spacing:.14em}}
@media (max-width:400px){.mark span{display:none}}

/* ---------- lotus nav: the signature ---------- */
.bloom-nav{position:fixed;left:clamp(1rem,2.4vw,2.2rem);bottom:clamp(1rem,3vh,2rem);z-index:var(--sc-z-chrome);
  display:flex;align-items:flex-end;gap:.9rem;transition:opacity 420ms var(--sc-ease-out),transform 420ms var(--sc-ease-out)}
.bloom-nav.is-done{opacity:0;transform:translateY(12px) scale(.9);pointer-events:none}
.bloom-nav svg{width:88px;height:66px;overflow:visible}
.bloom-nav a{cursor:pointer;outline:none}
.bloom-nav .track{fill:none;stroke:color-mix(in oklab,var(--line) 32%,transparent);stroke-width:1.6}
.bloom-nav .draw{fill:var(--line);fill-opacity:var(--f,0);stroke:var(--brown);stroke-width:2.2;stroke-linejoin:round;stroke-linecap:round;
  stroke-dasharray:1;stroke-dashoffset:calc(1 - var(--d,0));transition:fill-opacity 400ms var(--sc-ease-out)}
.bloom-nav a:focus-visible .draw,.bloom-nav a:hover .draw{stroke:#4F3A29;stroke-width:3}
.bloom-nav ol{list-style:none;margin:0;padding:.6rem .9rem;background:color-mix(in oklab,var(--sc-surface) 92%,transparent);
  box-shadow:var(--sc-e2);font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;line-height:2;
  opacity:0;transform:translateX(-6px);pointer-events:none;transition:opacity 200ms var(--sc-ease-out),transform 200ms var(--sc-ease-out)}
.bloom-nav ol a{text-decoration:none;color:var(--sc-ink-soft)}
.bloom-nav ol a.is-here{color:var(--sc-ink)}
.bloom-nav ol a:hover{color:var(--brown)}
.bloom-nav:hover ol,.bloom-nav:focus-within ol{opacity:1;transform:none;pointer-events:auto}
@media (max-width:760px){.bloom-nav{left:auto;right:.9rem;bottom:.9rem}.bloom-nav svg{width:64px;height:48px}.bloom-nav ol{display:none}}

/* ---------- 1 · hero (inhale) ---------- */
.hero .sc-stage{display:grid;place-items:center}
.plane{position:absolute;pointer-events:none;will-change:transform}
.hero__wash{inset:-12%;background:
   radial-gradient(42% 38% at 30% 38%,var(--rose) 0%,transparent 70%),
   radial-gradient(46% 42% at 72% 62%,var(--wash) 0%,transparent 72%),
   radial-gradient(60% 50% at 50% 50%,#F4EEE9 0%,transparent 80%);
  transform:translate3d(calc(var(--mx,0) * -10px),calc(var(--sc-p,0) * -6vh + var(--my,0) * -8px),0) scale(calc(1 + var(--sc-p,0) * .12))}
.hero__far{width:min(118vmin,1100px);left:50%;top:50%;
  transform:translate3d(calc(-50% + var(--mx,0) * -18px),calc(-46% + var(--sc-p,0) * -10vh + var(--my,0) * -14px),0) scale(calc(1 + var(--sc-p,0) * .55));
  opacity:calc(.9 - var(--sc-p,0) * .7)}
.hero__far use{fill:none;stroke:#D9C9BC;stroke-width:.45;stroke-linejoin:round;stroke-dasharray:1;animation:draw 3.2s var(--sc-ease-in-out) both}
.hero__far use:nth-child(2),.hero__far use:nth-child(3){animation-delay:.35s}
.hero__far use:nth-child(4),.hero__far use:nth-child(5){animation-delay:.7s}
@keyframes draw{from{stroke-dashoffset:1}to{stroke-dashoffset:0}}
.hero__copy{position:relative;z-index:var(--sc-z-copy);display:flex;flex-direction:column;align-items:center;text-align:center;gap:1.1rem;padding:0 var(--sc-gutter);margin-top:4vh}
.hero__copy .lotus{width:96px;height:72px;transform-origin:50% 85%;animation:breathe 6s ease-in-out 3s infinite}
.hero__copy .lotus use{fill:none;stroke:var(--line);stroke-width:1.5;stroke-linejoin:round;stroke-dasharray:1;animation:draw 2.2s var(--sc-ease-out) both}
@keyframes breathe{50%{transform:scale(1.07)}}
.hero h1{font-size:clamp(2.6rem,1.2rem + 5.2vw,5.6rem);letter-spacing:.16em;color:var(--brown);font-weight:500;line-height:1.04}
.hero__by{font-family:var(--sc-font-display);font-style:italic;font-size:clamp(1.3rem,1rem + 1vw,1.75rem);letter-spacing:.1em;color:var(--brown);margin:-.4rem 0 0}
.hero__lede{max-width:34rem;font-size:.92rem;letter-spacing:.14em;line-height:1.9;text-transform:uppercase;color:#3A3430;margin:0}
.hero__cta{display:flex;flex-wrap:wrap;gap:.8rem;justify-content:center;margin-top:.6rem}
.hero__beat{opacity:clamp(0, calc(var(--sc-p,0) * 4 - 1.9), 1);transform:translateY(calc((1 - clamp(0, calc(var(--sc-p,0) * 4 - 1.9), 1)) * 16px));position:absolute;z-index:var(--sc-z-copy);left:50%;top:50%;translate:-50% -50%;text-align:center;width:min(40rem,86vw)}
.hero__beat p{font-family:var(--sc-font-display);font-style:italic;font-size:clamp(2rem,1.2rem + 3vw,3.8rem);line-height:1.12;color:var(--brown);margin:0}
.hero__beat span{display:block;margin-top:1rem;font-family:var(--sc-font-text);font-style:normal;font-size:.8rem;letter-spacing:.3em;text-transform:uppercase;color:var(--sc-ink-soft)}
.petal{position:absolute;z-index:calc(var(--sc-z-copy) + 1);pointer-events:none;will-change:transform;filter:blur(var(--b,6px))}
.petal path{fill:var(--c,#C9A892)}
.petal--1{width:22vmin;left:-4vmin;top:58%;--b:7px;--c:#D8BBA9;transform:translate3d(calc(var(--mx,0) * 26px),calc(var(--sc-p,0) * -70vh),0) rotate(calc(-28deg + var(--sc-p,0) * 40deg))}
.petal--2{width:15vmin;right:3vmin;top:16%;--b:4px;--c:#CDAE99;transform:translate3d(calc(var(--mx,0) * 20px),calc(var(--sc-p,0) * -46vh),0) rotate(calc(32deg - var(--sc-p,0) * 30deg))}
.petal--3{width:30vmin;right:-9vmin;bottom:-14vmin;--b:10px;--c:#E2CABD;transform:translate3d(calc(var(--mx,0) * 34px),calc(var(--sc-p,0) * -95vh),0) rotate(calc(-150deg + var(--sc-p,0) * 25deg))}
.petal--4{width:9vmin;left:16%;top:9%;--b:2.5px;--c:#B99580;opacity:.7;transform:translate3d(calc(var(--mx,0) * 12px),calc(var(--sc-p,0) * -30vh),0) rotate(calc(140deg + var(--sc-p,0) * 50deg))}
.hero__floor{position:absolute;inset:auto 0 0 0;height:18vh;background:linear-gradient(to top,var(--sc-canvas),transparent);z-index:2;pointer-events:none}
@media (max-width:760px){
  .hero h1{font-size:clamp(2.1rem,9.4vw,3rem);letter-spacing:.1em}
  .hero__lede{font-size:.78rem;letter-spacing:.1em}
  .hero__copy{gap:.9rem}
  .hero__copy .lotus{width:76px;height:57px}
  .petal--1{width:30vmin;top:66%}.petal--3{width:42vmin}
}

/* ---------- 2 · Loslassen (exhale) ---------- */
.ease{padding-block:clamp(3rem,6vw,6rem) clamp(5rem,10vw,9rem)}
.ease__grid{display:grid;grid-template-columns:minmax(0,1.25fr) minmax(0,1fr);gap:clamp(2rem,6vw,7rem);align-items:end}
.ease h2{font-size:var(--sc-t-3xl);hyphens:manual;color:var(--sc-ink)}
.ease h2 em{color:var(--brown)}
.ease .sc-lede{font-size:var(--sc-t-lg);line-height:1.6;color:#3A3430;max-width:36ch}
.ease__note{display:flex;flex-wrap:wrap;gap:.4rem 1.6rem;margin-top:1.6rem;padding:0;list-style:none;font-size:.82rem;letter-spacing:.16em;text-transform:uppercase;color:var(--sc-ink-soft)}
.ease__note li::before{content:"";display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--line);margin-right:.7em;vertical-align:middle}
@media (max-width:760px){.ease__grid{grid-template-columns:1fr}}

/* ---------- 3 · Spüren (the peak) ---------- */
.feel .sc-stage{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1.1fr);align-items:center;gap:clamp(1.5rem,4vw,5rem);padding:5rem var(--sc-gutter) 2rem}
.feel{--open:clamp(0, calc(var(--sc-p,0) * 2.4 - .05), 1)}
.feel__frame{position:relative;justify-self:center;width:min(100%,600px,calc((100svh - 8rem) * .934));aspect-ratio:710/760;
  clip-path:circle(calc(13% + var(--open) * 74%) at 58% 17%);will-change:clip-path}
.feel__frame img{width:100%;height:100%;object-fit:cover;mix-blend-mode:multiply;transform:scale(calc(1.32 - var(--open) * .32));transform-origin:58% 17%;will-change:transform}
.feel__words{position:relative;min-height:18rem;grid-column:1;grid-row:1}
.feel__words > *{position:absolute;inset:0 0 auto 0}
.feel__step .num{font-family:var(--sc-font-display);font-size:clamp(3rem,2rem + 3vw,5.4rem);line-height:1;color:var(--line);display:block}
.feel__step h3{margin:.4rem 0 .9rem;font-size:.95rem;font-weight:500;letter-spacing:.24em;text-transform:uppercase}
.feel__step p{margin:0;max-width:30ch;font-size:var(--sc-t-lg);line-height:1.55;color:#3A3430}
.feel__last{font-family:var(--sc-font-display);font-style:italic;font-size:clamp(2.2rem,1.4rem + 3vw,4.2rem);line-height:1.08;color:var(--brown);margin:0}
.feel__frame{grid-column:2;grid-row:1}
@media (max-width:860px){
  .feel .sc-stage{grid-template-columns:1fr;grid-template-rows:auto 1fr;align-content:start;padding-top:5.2rem;gap:1rem}
  .feel__frame,  .feel__words{grid-column:1;grid-row:2;min-height:12rem}
  .feel__step p{font-size:1.05rem}
}

/* ---------- 4 · Wählen (pan) ---------- */
.choose .sc-stage{display:flex;align-items:center}
.rail{gap:clamp(1.25rem,3vw,3rem);padding:0 var(--sc-gutter);align-items:stretch}
.rail > *{flex:0 0 auto;opacity:calc(.55 + .45 * clamp(0, calc(var(--sc-p,0) * 4.2 - var(--i,0) + 1.4), 1))}
.rail__lead{width:clamp(16rem,28vw,24rem);align-self:center;opacity:1}
.rail__lead h2{font-size:var(--sc-t-3xl);letter-spacing:.12em}
.rail__lead p{margin-top:1rem;font-size:var(--sc-t-lg);color:var(--sc-ink-soft);max-width:22ch}
.offer{width:clamp(17rem,34vw,27rem);display:flex;flex-direction:column;gap:.9rem;padding:clamp(2rem,3vw,3rem);background:var(--sc-surface);
  border:1px solid color-mix(in oklab,var(--sc-ink) 14%,transparent);
  transition:transform 240ms var(--sc-ease-out),box-shadow 240ms var(--sc-ease-out)}
.offer .kind{font-size:.75rem;letter-spacing:.22em;text-transform:uppercase;color:var(--sc-ink-soft);margin:0}
.offer h3{font-family:var(--sc-font-display);font-weight:500;font-size:var(--sc-t-xl);margin:0;line-height:1.1}
.offer .dur{font-family:var(--sc-font-display);font-size:clamp(4rem,3rem + 3vw,6.4rem);line-height:.9;color:var(--brown);margin:.4rem 0 0;font-weight:500}
.offer .dur small{font-size:.28em;letter-spacing:.2em;margin-left:.3em;font-family:var(--sc-font-text);vertical-align:.9em}
.offer .price{font-family:var(--sc-font-display);font-size:2rem;font-weight:600;margin:0;border-top:1px solid color-mix(in oklab,var(--sc-ink) 18%,transparent);padding-top:.8rem}
.offer .desc{margin:0;color:var(--sc-ink-soft);line-height:1.65;flex-grow:1}
.offer .btn{align-self:flex-start}
.offer--hl{background:var(--sc-accent);border-color:var(--sc-accent);color:#fff}
.offer--hl .kind,.offer--hl .desc,.offer--hl .dur{color:#F7EFE8}
.offer--hl .price{border-color:rgba(255,255,255,.35)}
@media (hover:hover) and (pointer:fine){.offer:hover{transform:translateY(-8px);box-shadow:0 26px 44px -26px hsl(25 35% 22% / .6)}}
.rail__end{width:clamp(14rem,24vw,20rem);align-self:center;font-family:var(--sc-font-display);font-style:italic;font-size:var(--sc-t-xl);color:var(--brown);line-height:1.25}
@media (max-width:760px){.offer{width:80vw}.rail__lead{width:78vw}.rail__end{width:70vw}}

/* ---------- 5 · Vertrauen ---------- */
.me{padding-block:var(--sc-section)}
.me__grid{display:grid;grid-template-columns:minmax(0,1.2fr) minmax(0,1fr);gap:clamp(2rem,6vw,7rem);align-items:center}
.me__quote{position:relative;padding:1rem 0}
.me__quote p{font-family:var(--sc-font-display);font-style:italic;font-size:clamp(2.6rem,1.4rem + 4.4vw,6rem);line-height:1.04;color:var(--brown);margin:0}
.me__quote svg{width:clamp(90px,10vw,130px);height:auto;margin-bottom:1.2rem}
.me__quote svg use{fill:none;stroke:var(--line);stroke-width:1.2;stroke-linejoin:round}
.me h2{font-size:var(--sc-t-2xl);letter-spacing:.06em}
.me .sc-body{color:#3A3430;font-size:1.05rem;line-height:1.85}
@media (max-width:760px){.me__grid{grid-template-columns:1fr}}

/* ---------- 6 · Anfragen (close, the bloom) ---------- */
.ask{position:relative;padding-block:var(--sc-section) 0;overflow:clip}
.ask__bloom{position:absolute;left:50%;top:clamp(2rem,8vw,7rem);width:min(150vmin,1300px);translate:-50% 0;pointer-events:none;z-index:0;overflow:visible}
.ask__bloom g{transform-origin:32px 40px}
.ask__bloom path{fill:#E6D9CE;fill-opacity:var(--bf,0);stroke:#D3C0B1;stroke-width:.3;stroke-linejoin:round;stroke-dasharray:1;stroke-dashoffset:calc(1 - var(--bd,0))}
.ask__grid{position:relative;z-index:1;display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1.3fr);gap:clamp(2rem,6vw,6rem)}
.ask h2{font-size:var(--sc-t-3xl);letter-spacing:.06em}
.ask .sc-lede{color:#3A3430;margin-top:1.2rem}
.contact{display:flex;align-items:center;gap:.9rem;text-decoration:none;font-size:1.15rem;letter-spacing:.1em;padding:.6rem 0;width:max-content;
  transition:transform 180ms var(--sc-ease-out),color 180ms var(--sc-ease-out)}
.contact svg{width:20px;height:20px;transition:transform 240ms var(--sc-ease-out)}
@media (hover:hover) and (pointer:fine){.contact:hover{transform:translateX(6px);color:var(--brown)}.contact:hover svg{transform:rotate(-10deg) scale(1.12)}}
.contacts{margin-top:2rem;padding-top:1.4rem;border-top:1px solid color-mix(in oklab,var(--line) 50%,transparent)}
.form-card{background:color-mix(in oklab,var(--sc-surface) 94%,transparent);border:1px solid color-mix(in oklab,var(--sc-ink) 12%,transparent);
  padding:clamp(1.6rem,3.4vw,2.8rem);box-shadow:var(--sc-e2)}
.form-card form{display:flex;flex-direction:column;gap:1.25rem}
.f-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.25rem}
.form-card label{display:flex;flex-direction:column;gap:.5rem;font-size:.75rem;letter-spacing:.16em;text-transform:uppercase;color:#3A3430}
.form-card input:not([type=checkbox]),.form-card select{border:none;border-bottom:1px solid #3A3430;background:transparent;padding:.6rem .1rem;font-size:1rem;letter-spacing:0;min-height:44px;text-transform:none;
  transition:border-color 160ms var(--sc-ease-out)}
.form-card textarea{border:1px solid #C9BDB3;background:#FBF8F6;padding:.75rem;font-size:1rem;letter-spacing:0;resize:vertical;text-transform:none}
.form-card input:focus,.form-card select:focus,.form-card textarea:focus{outline:none;border-color:var(--sc-accent);box-shadow:0 1px 0 0 var(--sc-accent)}
.form-card .check{flex-direction:row;align-items:flex-start;gap:.8rem;font-size:.9rem;letter-spacing:0;text-transform:none;line-height:1.6}
.form-card .check input{width:20px;height:20px;margin:.15rem 0 0;flex-shrink:0}
.form-card button[type=submit]{align-self:flex-start}
#danke{display:flex;flex-direction:column;align-items:center;gap:1rem;text-align:center;padding:3.5rem 0}
#danke p:first-child{font-family:var(--sc-font-display);font-size:2.1rem;color:var(--brown);margin:0}
.foot{position:relative;z-index:1;margin-top:var(--sc-section);border-top:1px solid color-mix(in oklab,var(--sc-ink) 12%,transparent);padding:2.2rem 0 6rem}
.foot .sc-wrap{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem;font-size:.8rem;letter-spacing:.12em;color:var(--sc-ink-soft)}
.foot b{font-family:var(--sc-font-display);font-weight:500;font-size:1.1rem;letter-spacing:.2em;color:var(--brown)}
.foot nav{display:flex;gap:1.5rem}.foot nav a{padding:.75rem 0}
@media (max-width:860px){.ask__grid{grid-template-columns:1fr}}

/* ---------- reduced motion: same page, no travel ---------- */
@media (prefers-reduced-motion: reduce){
  .plane,.petal,.feel__frame img{transform:none!important}
  .hero__far use,.hero__copy .lotus use{animation:none;stroke-dashoffset:0}
  .hero__copy .lotus,.mark:hover svg{animation:none}
  .feel{--open:1}
  .hero__beat{display:none}
  .hero__copy{opacity:1!important}
  .btn,.offer,.contact,.bloom-nav{transition:none}
}
</style>
</head>
<body>
<span data-sc-progress aria-hidden="true"></span>
<div class="sc-grain" aria-hidden="true"></div>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <path id="p1" pathLength="1" d="M32 6c-7 8-7 22 0 34 7-12 7-26 0-34z"/>
    <path id="p2" pathLength="1" d="M32 40c-4-10-12-18-22-20 1 12 9 20 22 20z"/>
    <path id="p3" pathLength="1" d="M32 40c4-10 12-18 22-20-1 12-9 20-22 20z"/>
    <path id="p4" pathLength="1" d="M32 40C24 34 12 32 3 34c6 6 17 8 29 6z"/>
    <path id="p5" pathLength="1" d="M32 40c8-6 20-8 29-6-6 6-17 8-29 6z"/>
  </defs>
</svg>

<header class="bar">
  <a class="mark" href="#top" aria-label="Thai Yoga Massage, zum Anfang">
    <svg viewBox="0 0 64 48" fill="none" stroke="#9A7A5E" stroke-width="2.2" stroke-linejoin="round" aria-hidden="true"><use href="#p1"/><use href="#p2"/><use href="#p3"/><use href="#p4"/><use href="#p5"/></svg>
    <span>THAI YOGA MASSAGE</span>
  </a>
  <a class="btn btn--fill" href="#kontakt">Termin anfragen</a>
</header>

<!-- The lotus is the navigation: one petal per chapter, drawn while you read it. -->
<nav class="bloom-nav" aria-label="Kapitel">
  <svg viewBox="0 0 64 48" aria-hidden="true">
    <g class="tracks"><use class="track" href="#p1"/><use class="track" href="#p2"/><use class="track" href="#p3"/><use class="track" href="#p4"/><use class="track" href="#p5"/></g>
    <a href="#top" tabindex="-1"><path class="draw" data-petal="0" pathLength="1" d="M32 6c-7 8-7 22 0 34 7-12 7-26 0-34z"/></a>
    <a href="#massage" tabindex="-1"><path class="draw" data-petal="1" pathLength="1" d="M32 40c-4-10-12-18-22-20 1 12 9 20 22 20z"/></a>
    <a href="#preise" tabindex="-1"><path class="draw" data-petal="2" pathLength="1" d="M32 40c4-10 12-18 22-20-1 12-9 20-22 20z"/></a>
    <a href="#ueber" tabindex="-1"><path class="draw" data-petal="3" pathLength="1" d="M32 40C24 34 12 32 3 34c6 6 17 8 29 6z"/></a>
    <a href="#kontakt" tabindex="-1"><path class="draw" data-petal="4" pathLength="1" d="M32 40c8-6 20-8 29-6-6 6-17 8-29 6z"/></a>
  </svg>
  <ol>
    <li><a href="#top" data-petal-link="0">Ankommen</a></li>
    <li><a href="#massage" data-petal-link="1">Die Massage</a></li>
    <li><a href="#preise" data-petal-link="2">Preise</a></li>
    <li><a href="#ueber" data-petal-link="3">Über mich</a></li>
    <li><a href="#kontakt" data-petal-link="4">Termin anfragen</a></li>
  </ol>
</nav>

<main>

<!-- 1 · Ankommen: pinned, layered planes (inhale) -->
<section id="top" class="hero" data-sc-act="pin" data-sc-span="2.1" data-sc-drift="#EFE8E3" data-chapter="0">
  <div data-sc-stage>
    <div class="plane hero__wash" aria-hidden="true"></div>
    <svg class="plane hero__far" viewBox="0 0 64 48" aria-hidden="true"><use href="#p1"/><use href="#p2"/><use href="#p3"/><use href="#p4"/><use href="#p5"/></svg>
    <div class="hero__copy" data-sc-cue="0 0.5 0">
      <svg class="lotus" viewBox="0 0 64 48" aria-hidden="true"><use href="#p1"/><use href="#p2"/><use href="#p3"/><use href="#p4"/><use href="#p5"/></svg>
      <h1 class="sc-display">THAI YOGA MASSAGE</h1>
      <p class="hero__by">by Maggy Bartels</p>
      <p class="hero__lede">Sanfte Dehnung, rhythmischer Druck und achtsame Berührung.</p>
      <div class="hero__cta">
        <a class="btn btn--fill" href="#kontakt">Termin anfragen</a>
        <a class="btn" href="#preise">Preise ansehen</a>
      </div>
    </div>
    <div class="hero__beat">
      <p>Gönn dir eine Auszeit.</p>
      <span>Für Körper und Geist</span>
    </div>
    <svg class="petal petal--1" viewBox="0 0 20 36" aria-hidden="true"><path d="M10 0C2 9 2 26 10 36 18 26 18 9 10 0z"/></svg>
    <svg class="petal petal--2" viewBox="0 0 20 36" aria-hidden="true"><path d="M10 0C2 9 2 26 10 36 18 26 18 9 10 0z"/></svg>
    <svg class="petal petal--3" viewBox="0 0 20 36" aria-hidden="true"><path d="M10 0C2 9 2 26 10 36 18 26 18 9 10 0z"/></svg>
    <svg class="petal petal--4" viewBox="0 0 20 36" aria-hidden="true"><path d="M10 0C2 9 2 26 10 36 18 26 18 9 10 0z"/></svg>
    <div class="hero__floor" aria-hidden="true"></div>
  </div>
</section>

<!-- 2 · Loslassen: plain flow (exhale), the quiet before the peak -->
<section id="massage" class="ease" data-sc-act="flow" data-chapter="1">
  <div class="sc-wrap ease__grid">
    <h2 class="sc-display" data-sc-in>Die Thai-Yoga-<em>Massage</em></h2>
    <div data-sc-stagger="70" data-sc-in>
      <p class="sc-lede">Löst Verspannungen, verbessert die Beweglichkeit und bringt Körper und Geist in Einklang.</p>
      <ul class="ease__note">
        <li>ohne Öl</li><li>in bequemer Kleidung</li><li>auf der Bodenmatte</li>
      </ul>
    </div>
  </div>
</section>

<!-- 3 · Spüren: THE PEAK. Pinned; the photo opens from a small round window. -->
<section class="feel" data-sc-act="pin" data-sc-span="3.4" data-sc-drift="#E9E0D8" data-chapter="1">
  <div data-sc-stage>
    <div class="feel__words">
      <div class="feel__step" data-sc-cue="0.12 0.44 0.18 0.18">
        <span class="num">I</span>
        <h3>Sanfte Dehnung</h3>
        <p>Passive, yogaähnliche Dehnungen öffnen den Körper und schenken neue Beweglichkeit.</p>
      </div>
      <div class="feel__step" data-sc-cue="0.38 0.66 0.18 0.18">
        <span class="num">II</span>
        <h3>Rhythmischer Druck</h3>
        <p>Achtsamer Druck entlang der Energielinien löst Verspannungen in der Tiefe.</p>
      </div>
      <div class="feel__step" data-sc-cue="0.6 0.86 0.18 0.18">
        <span class="num">III</span>
        <h3>Achtsame Berührung</h3>
        <p>Ruhe, Präsenz und Zeit nur für dich. Ein Moment, um wirklich anzukommen.</p>
      </div>
      <p class="feel__last" data-sc-cue="0.8 1 0.18 0">Und dann liegst du selbst auf der Matte.</p>
    </div>
    <figure class="feel__frame" style="margin:0">
      <img src="maggy-thai-yoga-massage.jpg" width="710" height="760" alt="Maggy Bartels bei einer Thai-Yoga-Massage: sanfte Dehnung auf der Bodenmatte">
    </figure>
  </div>
</section>

<!-- 4 · Wählen: lateral travel reads as options -->
<section id="preise" class="choose" data-sc-act="pan" data-sc-span="3.4" data-sc-drift="#EFE8E3" data-chapter="2">
  <div data-sc-stage>
    <div class="rail" data-sc-pan="0.04">
      <div class="rail__lead">
        <h2 class="sc-display">PREISE</h2>
        <p>Drei Wege zu deiner Auszeit.</p>
      </div>
      <article class="offer" style="--i:1">
        <p class="kind">Kennenlern-Angebot</p>
        <h3>Erste Auszeit</h3>
        <p class="dur">60<small>MIN</small></p>
        <p class="price">45 €</p>
        <p class="desc">Ideal zum Ausprobieren: Ganzkörper-Behandlung mit kurzem Vorgespräch.</p>
        <a class="btn" href="#kontakt" data-offer="0">Termin anfragen</a>
      </article>
      <article class="offer offer--hl" style="--i:2">
        <p class="kind">Beliebt</p>
        <h3>Tiefe Entspannung</h3>
        <p class="dur">90<small>MIN</small></p>
        <p class="price">69 €</p>
        <p class="desc">Mehr Zeit für Dehnung und Druckpunkte. Der ganze Körper kommt zur Ruhe.</p>
        <a class="btn btn--light" href="#kontakt" data-offer="1">Termin anfragen</a>
      </article>
      <article class="offer" style="--i:3">
        <p class="kind">5er-Karte</p>
        <h3>Regelmäßig im Einklang</h3>
        <p class="dur">5×60<small>MIN</small></p>
        <p class="price">249 €</p>
        <p class="desc">Für dich oder als Geschenk, flexibel einlösbar, Gutschein auf Wunsch.</p>
        <a class="btn" href="#kontakt" data-offer="2">Termin anfragen</a>
      </article>
      <p class="rail__end" style="--i:4">Gutscheine für jedes Angebot erhältlich.</p>
    </div>
  </div>
</section>

<!-- 5 · Vertrauen: flow with a wipe on the quote -->
<section id="ueber" class="me" data-sc-act="flow" data-chapter="3">
  <div class="sc-wrap me__grid">
    <div class="me__quote" data-sc-reveal="left" data-sc-reveal-at="0.12 0.42">
      <svg viewBox="0 0 64 48" aria-hidden="true"><use href="#p1"/><use href="#p2"/><use href="#p3"/><use href="#p4"/><use href="#p5"/></svg>
      <p>„Gönn dir eine Auszeit.“</p>
    </div>
    <div class="sc-stack" data-sc-in data-sc-stagger="70">
      <p class="caps">Über mich</p>
      <h2 class="sc-display">Maggy Bartels</h2>
      <p class="sc-body">[Kurzer Text über dich: Wie bist du zur Thai-Yoga-Massage gekommen, welche Ausbildung hast du, und was ist dir bei jeder Behandlung wichtig?]</p>
      <p class="sc-body">[Wo finden die Behandlungen statt? Adresse / Praxisraum / Hausbesuche]</p>
    </div>
  </div>
</section>

<!-- 6 · Anfragen: the lotus completes and blooms behind the form -->
<section id="kontakt" class="ask" data-sc-act="flow" data-chapter="4">
  <svg class="ask__bloom" viewBox="0 0 64 48" aria-hidden="true">
    <g><path pathLength="1" d="M32 6c-7 8-7 22 0 34 7-12 7-26 0-34z"/></g>
    <g><path pathLength="1" d="M32 40c-4-10-12-18-22-20 1 12 9 20 22 20z"/></g>
    <g><path pathLength="1" d="M32 40c4-10 12-18 22-20-1 12-9 20-22 20z"/></g>
    <g><path pathLength="1" d="M32 40C24 34 12 32 3 34c6 6 17 8 29 6z"/></g>
    <g><path pathLength="1" d="M32 40c8-6 20-8 29-6-6 6-17 8-29 6z"/></g>
  </svg>
  <div class="sc-wrap ask__grid">
    <div data-sc-in data-sc-stagger="70">
      <h2 class="sc-display">Termin anfragen</h2>
      <p class="sc-lede">Schreib mir eine Nachricht oder ruf einfach an. Ich melde mich schnellstmöglich mit einem Terminvorschlag.</p>
      <div class="contacts">
        <a class="contact" href="tel:+491725112278">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
          0172 5112278</a>
        <a class="contact" href="https://instagram.com/maggybartels">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.6" fill="currentColor"/></svg>
          instagram.com/maggybartels</a>
      </div>
    </div>

    <div class="form-card" data-sc-in>
      <div id="danke" hidden>
        <p>Danke für deine Anfrage!</p>
        <p>Ich melde mich in Kürze bei dir.</p>
        <button type="button" id="neu" class="btn">Neue Anfrage</button>
      </div>
      <form id="anfrage" action="https://formspree.io/f/DEINE-FORM-ID" method="POST">
        <div class="f-row">
          <label>Name *<input type="text" name="name" autocomplete="name" required></label>
          <label>Telefon<input type="tel" name="telefon" autocomplete="tel"></label>
        </div>
        <label>E-Mail *<input type="email" name="email" autocomplete="email" required></label>
        <label>Gewünschtes Angebot
          <select name="angebot" id="angebot">
            <option>Kennenlern-Angebot · 60 Min · 45 €</option>
            <option>Tiefe Entspannung · 90 Min · 69 €</option>
            <option>5er-Karte · 5 × 60 Min · 249 €</option>
            <option>Gutschein</option>
          </select></label>
        <label>Nachricht / Wunschtermin<textarea name="nachricht" rows="4"></textarea></label>
        <label class="check"><input type="checkbox" name="datenschutz" required>
          Ich bin einverstanden, dass meine Angaben zur Bearbeitung der Anfrage gespeichert werden (siehe Datenschutzerklärung).</label>
        <button type="submit" class="btn btn--fill">Anfrage senden</button>
      </form>
    </div>
  </div>

  <footer class="foot">
    <div class="sc-wrap">
      <b>THAI YOGA MASSAGE · <i style="letter-spacing:.06em">by Maggy Bartels</i></b>
      <nav aria-label="Rechtliches"><a href="#impressum">IMPRESSUM</a><a href="#datenschutz">DATENSCHUTZ</a></nav>
    </div>
  </footer>
</section>

</main>

<script src="scrollcraft.js"></script>
<script>
ScrollCraft.mount(document.body);

(function(){
  var reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  var fine = matchMedia('(hover: hover) and (pointer: fine)');

  // Signature: one petal per chapter, drawn while that chapter is read.
  var chapters = [[],[],[],[],[]];
  document.querySelectorAll('[data-chapter]').forEach(function(s){ chapters[+s.dataset.chapter].push(s); });
  var petals = document.querySelectorAll('.bloom-nav .draw');
  var links = document.querySelectorAll('[data-petal-link]');
  var nav = document.querySelector('.bloom-nav');
  var ask = document.getElementById('kontakt');
  var bloom = document.querySelectorAll('.ask__bloom g');
  var clamp = function(v){ return v < 0 ? 0 : v > 1 ? 1 : v; };

  function frame(){
    var y = scrollY, vh = innerHeight, here = 0;
    chapters.forEach(function(list, i){
      var a = list[0].getBoundingClientRect().top + y;
      var b = list[list.length - 1].getBoundingClientRect().bottom + y;
      var p = clamp((y + vh * .72 - a) / Math.max(b - a, 1));
      if (i === 4) p = clamp((y + vh - a) / Math.max(vh * .9, 1));
      petals[i].style.setProperty('--d', p.toFixed(4));
      petals[i].style.setProperty('--f', p >= .999 ? .55 : 0);
      if (p > 0) here = i;
    });
    links.forEach(function(l, i){ l.classList.toggle('is-here', i === here); });

    // Close: the same five petals arrive full size and open behind the form.
    var r = ask.getBoundingClientRect();
    var q = clamp((vh - r.top) / (vh * 1.1));
    nav.classList.toggle('is-done', q > .55);
    bloom.forEach(function(g, i){
      var local = clamp(q * 1.6 - i * .12);
      var open = reduce ? 0 : (1 - local) * (i === 0 ? 0 : (i % 2 ? -1 : 1) * (i > 2 ? 18 : 12));
      g.style.transform = 'rotate(' + open.toFixed(2) + 'deg)';
      g.firstElementChild.style.setProperty('--bd', local.toFixed(4));
      g.firstElementChild.style.setProperty('--bf', (local * .5).toFixed(4));
    });
  }
  var queued = false;
  function onScroll(){ if (!queued){ queued = true; requestAnimationFrame(function(){ queued = false; frame(); }); } }
  addEventListener('scroll', onScroll, { passive: true });
  addEventListener('resize', onScroll);
  frame();

  // The hero leans with the visitor: planes shift by depth, never the copy.
  var hero = document.querySelector('.hero');
  if (!reduce) hero.addEventListener('pointermove', function(e){
    if (!fine.matches) return;
    hero.style.setProperty('--mx', (e.clientX / innerWidth - .5).toFixed(3));
    hero.style.setProperty('--my', (e.clientY / innerHeight - .5).toFixed(3));
  });

  // Choosing an offer preselects it in the form.
  var sel = document.getElementById('angebot');
  document.querySelectorAll('[data-offer]').forEach(function(a){
    a.addEventListener('click', function(){ sel.selectedIndex = +a.dataset.offer; });
  });

  var f = document.getElementById('anfrage'), d = document.getElementById('danke');
  f.addEventListener('submit', async function(e){
    e.preventDefault();
    try {
      var r = await fetch(f.action, { method: 'POST', body: new FormData(f), headers: { Accept: 'application/json' } });
      if (!r.ok) throw 0;
      f.reset(); f.hidden = true; d.hidden = false;
    } catch (_) { alert('Leider konnte die Anfrage nicht gesendet werden. Bitte ruf kurz an: 0172 5112278'); }
  });
  document.getElementById('neu').addEventListener('click', function(){ d.hidden = true; f.hidden = false; });
})();
</script>
</body>
</html>
