<?php
/**
 * Ejercicio 2: Patrón Adapter
 * 
 * Programa que permite a Windows 10 abrir archivos de Windows 7
 * (Word, Excel, PowerPoint) usando el patrón Adapter
 */

require_once 'AdaptadorArchivoWindows7.php';
require_once 'WordWindows7.php';
require_once 'ExcelWindows7.php';
require_once 'PowerPointWindows7.php';

echo "=== Ejercicio 2: Patrón Adapter ===\n\n";

// Crear archivos de Windows 7
$wordW7 = new WordWindows7("Documento_Informe");
$excelW7 = new ExcelWindows7("Hoja_Calculos");
$powerPointW7 = new PowerPointWindows7("Presentacion_Proyecto");

// Crear adaptadores para que Windows 10 pueda abrir los archivos
$wordAdaptado = new AdaptadorArchivoWindows7($wordW7);
$excelAdaptado = new AdaptadorArchivoWindows7($excelW7);
$powerPointAdaptado = new AdaptadorArchivoWindows7($powerPointW7);

// Abrir archivos en Windows 10 usando el adaptador
echo "Abriendo archivos de Windows 7 en Windows 10:\n\n";

echo "1. Word:\n";
echo "   " . $wordAdaptado->abrir() . "\n";
echo "   Nombre: " . $wordAdaptado->getNombre() . "\n";
echo "   Extensión convertida: " . $wordAdaptado->getExtension() . "\n\n";

echo "2. Excel:\n";
echo "   " . $excelAdaptado->abrir() . "\n";
echo "   Nombre: " . $excelAdaptado->getNombre() . "\n";
echo "   Extensión convertida: " . $excelAdaptado->getExtension() . "\n\n";

echo "3. PowerPoint:\n";
echo "   " . $powerPointAdaptado->abrir() . "\n";
echo "   Nombre: " . $powerPointAdaptado->getNombre() . "\n";
echo "   Extensión convertida: " . $powerPointAdaptado->getExtension() . "\n";
