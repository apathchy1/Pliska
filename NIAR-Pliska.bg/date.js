var d_names = new Array("Неделя", "Понеделник", "Вторник",
"Сряда", "Четвъртък", "Петък", "Събота");

var m_names = new Array("Януари", "Февруари", "Март",
"Април", "Май", "Юни", "Юли", "Август", "Септември",
"Октомври", "Ноември", "Декември");

var d = new Date();
var curr_day = d.getDay();
var curr_date = d.getDate();
var sup = "";
if (curr_date == 1 || curr_date == 21 || curr_date ==31)
   {
   sup = "ви";
   }
else if (curr_date == 2 || curr_date == 22)
   {
   sup = "ри";
   }
else if (curr_date == 3 || curr_date == 23)
   {
   sup = "ти";
   }
else
   {
   sup = "ти";
   }
var curr_month = d.getMonth();
var curr_year = d.getFullYear();

document.write(d_names[curr_day] + " " + curr_date + "<SUP>"
+ sup + "</SUP> " + m_names[curr_month] + " " + curr_year);
