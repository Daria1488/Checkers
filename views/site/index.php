<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Test JavaScript</title>
</head>

<body>

<table class="board">
    <tr p="1">
        <td class="td1"  p="1"></td>
        <td  class="td2" align="center" p="2"><div class="pawn2"></div></td>
        <td class="td1"  p="3"></td>
        <td  class="td2" align="center" p="4"><div class="pawn2"></div></td>
        <td class="td1"  p="5"></td>
        <td  class="td2" align="center" p="6"><div class="pawn2"></div></td>
        <td class="td1"  p="7"></td>
        <td  class="td2" align="center" p="8"><div class="pawn2"></div></td>
    </tr>

    <tr p="2">
        <td  class="td2" align="center" p="1"><div class="pawn2"></div></td>
        <td class="td1"  p="2"></td>
        <td  class="td2" align="center" p="3"><div class="pawn2"></div></td>
        <td class="td1"  p="4"></td>
        <td  class="td2" align="center" p="5"><div class="pawn2"></div></td>
        <td class="td1"  p="6"></td>
        <td  class="td2" align="center" p="7"><div class="pawn2"></div></td>
        <td class="td1"  p="8"></td>
    </tr>

    <tr p="3">
        <td class="td1"  p="1"></td>
        <td  class="td2" align="center" p="2"><div class="pawn2"></div></td>
        <td class="td1"  p="3"></td>
        <td  class="td2" align="center" p="4"><div class="pawn2"></div></td>
        <td class="td1"  p="5"></td>
        <td  class="td2" align="center" p="6"><div class="pawn2"></div></td>
        <td class="td1"  p="7"></td>
        <td  class="td2" align="center" p="8"><div class="pawn2"></div></td>
    </tr>

    <tr p="4">
        <td  class="td2" align="center" p="1"></td>
        <td class="td1"  p="2"></td>
        <td  class="td2" align="center" p="3"></td>
        <td class="td1"  p="4"></td>
        <td  class="td2" align="center" p="5"></td>
        <td class="td1"  p="6"></td>
        <td  class="td2" align="center" p="7"></td>
        <td class="td1"  p="8"></td>
    </tr>

    <tr p="5">
        <td class="td1"  p="1"></td>
        <td  class="td2" align="center" p="2"></td>
        <td class="td1"  p="3"></td>
        <td  class="td2" align="center" p="4"></td>
        <td class="td1"  p="5"></td>
        <td  class="td2" align="center" p="6"></td>
        <td class="td1"  p="7"></td>
        <td  class="td2" align="center" p="8"></td>
    </tr>

    <tr p="6">
        <td  class="td2" align="center" p="1"><div class="pawn1"></div></td>
        <td class="td1"  p="2"></td>
        <td  class="td2" align="center" p="3"><div class="pawn1"></div></td>
        <td class="td1"  p="4"></td>
        <td  class="td2" align="center" p="5"><div class="pawn1"></div></td>
        <td class="td1"  p="6"></td>
        <td  class="td2" align="center" p="7"><div class="pawn1"></div></td>
        <td class="td1"  p="8"></td>
    </tr>

    <tr p="7">
        <td class="td1"  p="1"></td>
        <td  class="td2" align="center" p="2"><div class="pawn1"></div></td>
        <td class="td1"  p="3"></td>
        <td  class="td2" align="center" p="4"><div class="pawn1"></div></td>
        <td class="td1"  p="5"></td>
        <td  class="td2" align="center" p="6"><div class="pawn1"></div></td>
        <td class="td1"  p="7"></td>
        <td  class="td2" align="center" p="8"><div class="pawn1"></div></td>
    </tr>

    <tr p="8">
        <td  class="td2" align="center" p="1"><div class="pawn1"></div></td>
        <td class="td1"  p="2"></td>
        <td  class="td2" align="center" p="3"><div class="pawn1"></div></td>
        <td class="td1"  p="4"></td>
        <td  class="td2" align="center" p="5"><div class="pawn1"></div></td>
        <td class="td1"  p="6"></td>
        <td  class="td2" align="center" p="7"><div class="pawn1"></div></td>
        <td class="td1"  p="8"></td>
    </tr>
</table>

<div class="indicator"><div>Игра не начата</div></div>

<div class="message"><div>Ходить можно только вперёд по диагонали, бить можно как вперёд,
        так и назад, если шашка дошла до другого конца, то она превращается в дамку. Бой обязателен.</div></div>

<div class="timer hide"></div>

<div class="shadow"><input type="button" class="start" value="Начать"/></div>

<div class="score hide">Белые 12:12 Красные</div>

<div class="win hide"><div></div></div>

</body>

</html>