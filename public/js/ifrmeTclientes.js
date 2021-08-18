document.getElementById("crear").addEventListener("click", () => {
    
    var iframe = document.createElement('iframe');
    var html = '<body>Tu nuevo HTML</body>';
    iframe.src = 'data:text/html;charset=utf-8,' + encodeURI(html);
    document.getElementById("contenido").appendChild(iframe);
      
  }); 