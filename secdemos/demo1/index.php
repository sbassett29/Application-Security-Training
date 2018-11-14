<html>

<h1>Security Demos - Demo 1</h1>

<ol>
<li><a
href="https://localhost/secdemos/demo1/bad.php?div1Style=color:green&div1Msg=<script>alert('oh&nbsp;dear')</script>Click+This+Button!&btnHref=wikimedia.org">URL 1 (divMsg1 XSS)</a></li>
<li><a
href="https://localhost/secdemos/demo1/bad.php?div1Style=color:green&div1Msg=Click+This+Button!&btnHref=javascript:alert('oh&nbsp;dear')">URL 2 (btnHref no javascript: filter)</a></li>
<li><a
href="https://localhost/secdemos/demo1/bad.php?div1Style=--a:1px;--b:calc(var(--a) + var(--a));--c:calc(var(--b) + var(--b));--d:calc(var(--c) + var(--c));--e:calc(var(--d) + var(--d));--f:calc(var(--e) + var(--e));--g:calc(var(--f) + var(--f));--h:calc(var(--g) + var(--g));--i:calc(var(--h) + var(--h));--j:calc(var(--i) + var(--i));--k:calc(var(--j) + var(--j));--l:calc(var(--k) + var(--k));--m:calc(var(--l) + var(--l));--n:calc(var(--m) + var(--m));--o:calc(var(--n) + var(--n));--p:calc(var(--o) + var(--o));--q:calc(var(--p) + var(--p));--r:calc(var(--q) + var(--q));--s:calc(var(--r) + var(--r));--t:calc(var(--s) + var(--s));--u:calc(var(--t) + var(--t));--v:calc(var(--u) + var(--u));--w:calc(var(--v) + var(--v));--x:calc(var(--w) + var(--w));--y:calc(var(--x) + var(--x));--z:calc(var(--y) + var(--y));--vf:calc(var(--z) + 1px);border-width:var(--vf);border-style:solid;&div1Msg=Click+This+Button!&btnHref=wikimedia.org">URL 3 (css craaaaaaaaash...)</a></li>
</ol>

</html>
