(function(){
    var actualizarhora=function(){
        var fecha=new Date(),
        diasemana=fecha.getDay(),
        dia=fecha.getDate(),
        mes=fecha.getMonth(),
        año=fecha.getFullYear(),
        horas=fecha.getHours(),
        ampm,
        segundos=fecha.getSeconds();
        minutos=fecha.getMinutes();
        var pdiasemana=document.getElementById('dia'),
        pFecha=document.getElementById('fecha'),
        pMes=document.getElementById('mes'),
        pAño=document.getElementById('año'),
        pHoras=document.getElementById('horas'),
        pMinutos=document.getElementById('minutos'),
        pSegundos=document.getElementById('segundos'),
        pAMPM=document.getElementById('pmam');
         var semana=['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
         pdiasemana.textContent=semana[diasemana];
         pFecha.textContent=dia;
         var meses=['Diciembre','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
         pMes.textContent=meses[mes+1];
         pAño.textContent=año;
         if (horas>=12) {
             horas=horas-12;
             ampm='PM';
         }
         else{
             ampm='AM';
         }
         if (horas==0) {
             horas=12;
         }
          if (minutos<10) {
              minutos="0"+minutos;
          };        
         pHoras.textContent=horas;
         pMinutos.textContent=minutos;
         pAMPM.textContent=ampm;
         pSegundos.textContent=segundos;
    }
    actualizarhora();
    var intervalo=setInterval(actualizarhora,1000);
}())