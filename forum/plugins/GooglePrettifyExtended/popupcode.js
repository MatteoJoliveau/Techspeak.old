function popup(obj)
{
  var myHtml = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Popup</title><style>li{list-style:none;}</style></head><body>' +
      $(obj).nextAll('.CodeBlock').first().html() +
      '</body></html>';

  var generator = window.open('','name','height=400,width=600');
  generator.document.body.innerHTML = myHtml;
}


