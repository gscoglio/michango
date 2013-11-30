var page = require('webpage').create();
var url = "https://www.walmartonline.com.ar/Busqueda.aspx?Departamento=D_almacen";
page.open(url, function(status) {
  var productos = page.evaluate(function() {
    return dsItems.doc;
  });
  console.log(productos);
  phantom.exit();
});