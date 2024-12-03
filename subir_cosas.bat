@echo off
echo ================================
echo   Subiendo cambios a Git...
echo ================================

REM Navegar a la carpeta del repositorio (ajusta la ruta según sea necesario)
cd /d "C:/Users/%USERNAME%/Desktop/ODAW2A"

REM Agregar todos los cambios al área de preparación
git add .

REM Obtener la fecha actual en formato YYYY-MM-DD usando wmic
for /f %%i in ('wmic os get localdatetime ^| find "."') do set datetime=%%i
set fecha=%datetime:~0,4%-%datetime:~4,2%-%datetime:~6,2%

REM Crear el mensaje de commit con la fecha actual
set commit_message=Commit del dia: %fecha%

REM Hacer commit con el mensaje automático
git commit -m "%commit_message%"

REM Subir cambios al repositorio remoto
git push origin main

echo ================================
echo   Cambios subidos correctamente
echo ================================
echo ¿Estás seguro de que quieres apagar el ordenador? (S/N)
set /p respuesta=

if /i "%respuesta%"=="S" (
    echo Apagando el ordenador...
    shutdown /s /t 0
) else (
    echo Cancelado.
  
)
pause
