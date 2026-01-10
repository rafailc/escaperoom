/* style.css */

:root{
  --bg: #0b0a10;
  --panel: rgba(20, 18, 28, 0.72);
  --panel-2: rgba(10,10,14,0.70);
  --text: #f2f2f2;
  --muted: rgba(242,242,242,0.82);
  --accent: #ff6a00;
  --accent-soft: rgba(255, 106, 0, 0.18);
  --border: rgba(255, 106, 0, 0.22);
  --shadow: 0 18px 28px rgba(0,0,0,0.55);
}

*{ box-sizing: border-box; }

html, body{ height: 100%; }

body{
  margin:0;
  font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
  color: var(--text);
  background: url("images/bg.png") center/cover no-repeat fixed;
  position: relative;
  line-height: 1.35;
}

/* Dark overlay */
body::before{
  content:"";
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.50);
  pointer-events: none;
  z-index: 0;
}

/* Content above overlay */
.page{
  width: min(1100px, 92%);
  margin: 0 auto;
  padding: 22px 0 44px;
  position: relative;
  z-index: 1;
}

.topbar{
  background: linear-gradient(180deg, rgba(18,9,21,0.92) 0%, rgba(12,10,16,0.92) 100%);
  border: 1px solid var(--border);
  border-radius: 16px;
  box-shadow: var(--shadow);
  padding: 18px 18px;
  backdrop-filter: blur(6px);
}

.topbar-inner{
  display:flex;
  align-items:flex-start;
  justify-content:space-between;
  gap: 14px;
}

.topbar-left h1{
  margin:0 0 6px 0;
  letter-spacing: .3px;
  font-size: clamp(22px, 2.2vw, 30px);
}

.topbar-left p{
  margin:0;
  color: var(--muted);
}

.halloween-badge{
  white-space: nowrap;
  font-size: 13px;
  padding: 8px 12px;
  border-radius: 999px;
  background: rgba(255, 106, 0, 0.12);
  border: 1px solid rgba(255, 106, 0, 0.40);
  color: #ffd4a6;
  box-shadow: 0 0 18px rgba(255, 106, 0, 0.18);
  align-self: flex-start;
}

.box{
  margin-top: 18px;
  background: var(--panel);
  border-radius: 16px;
  padding: 18px;
  box-shadow: 0 16px 26px rgba(0,0,0,0.45);
  border: 1px solid rgba(255, 106, 0, 0.14);
  backdrop-filter: blur(8px);
}

.note{
  margin-top: 12px;
  font-size: 13px;
  color: rgba(242,242,242,0.86);
}

.note strong{ color:#ffe2c2; }

/* Table wrapper for mobile horizontal scroll */
.table-wrap{
  overflow:auto;
  border-radius: 14px;
  border: 1px solid rgba(255,106,0,0.35);
}

/* Table */
.rooms-table{
  width:100%;
  border-collapse: separate;
  border-spacing: 0;
  min-width: 860px; /* allows better mobile scroll */
  background: rgba(0,0,0,0.28);
}

.rooms-table thead th{
  position: sticky;
  top: 0;
  z-index: 2;
  background: rgba(255,106,0,0.22);
  color: #ffe2c2;
  text-align:left;
  padding: 14px 14px;
  font-size: 15px;
  border-bottom: 1px solid rgba(255,106,0,0.45);
}

.rooms-table tbody td{
  padding: 14px 14px;
  background: rgba(0,0,0,0.55);
  color: #ffffff;
  font-size: 15px;
  border-bottom: 1px solid rgba(255,255,255,0.08);
  vertical-align: middle;
}

.rooms-table tbody tr:nth-child(even) td{
  background: rgba(0,0,0,0.66);
}

.rooms-table tbody tr:hover td{
  background: rgba(255,106,0,0.14);
}

/* image */
.room-img{
  width: 120px;
  height: 78px;
  object-fit: cover;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,0.16);
  display: block;
  box-shadow: 0 10px 18px rgba(0,0,0,0.35);
}

/* Buttons */
.btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap: 8px;
  padding: 10px 14px;
  background: var(--accent);
  color:#1a0f12;
  text-decoration:none;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 800;
  border: 1px solid rgba(255,255,255,0.12);
  box-shadow: 0 0 18px rgba(255, 106, 0, 0.18);
  transition: transform .12s ease, filter .12s ease, box-shadow .12s ease;
}

.btn:hover{
  filter: brightness(1.03);
  transform: translateY(-1px);
  box-shadow: 0 0 26px rgba(255, 106, 0, 0.22);
}

.btn:active{
  transform: translateY(0px);
}

.footer{
  margin-top: 16px;
  text-align:center;
  color: rgba(242,242,242,0.80);
  padding: 12px 10px;
  border-radius: 14px;
  background: var(--panel-2);
  border: 1px solid rgba(255, 106, 0, 0.14);
  backdrop-filter: blur(8px);
}

/* Small screens: stack the badge under title */
@media (max-width: 520px){
  .topbar-inner{
    flex-direction: column;
    align-items: flex-start;
  }
  .halloween-badge{
    margin-top: 6px;
  }
}
