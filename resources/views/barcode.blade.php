<!DOCTYPE html>
<html>
<head>
    <title>Barcode</title>
</head>
<body>
  
   
<h3>Hazem mahmoud hassanecho "# learning-system" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Devhazemmahmoud1/learning-system.git
git push -u origin main</h3>
@php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
@endphp
  
<img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('0000052636358', $generatorPNG::TYPE_CODE_128)) }}">
</body>
</html>