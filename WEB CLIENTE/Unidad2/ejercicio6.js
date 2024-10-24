let min = 0;

for (let hora = 9; hora < 21 || min < 5; ) {
  if (min == 0) {
    document.write("son las " + hora + ":00<br>");
  } else if (min == 5) {
    document.write("son las" + hora + ":05<br>");
  } else {
    document.write("son las" + hora + ":" + min + "<br>");
  }
  min += 5;

  if (min > 55) {
    hora++;
    min = 0;
    document.write("<br/>");
  }
}
