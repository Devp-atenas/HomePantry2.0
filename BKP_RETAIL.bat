CLS
@echo off
REM Toma la fecha y hora del sistema
@echo off
for /f "delims=" %%a in ('wmic OS Get localdatetime  ^| find "."') do set dt=%%a
set YYYY=%dt:~0,4%
set MM=%dt:~4,2%
set DD=%dt:~6,2%
set HH=%dt:~8,2%
set Min=%dt:~10,2%
set Sec=%dt:~12,2%
set Fecha_Backup=%DD%-%MM%-%YYYY%_%HH%-%Min%-%Sec%
REM

if existE:\ goto copia
	color c
	echo PENDRIVE NO! ENCONTRADO
	echo.
	echo.
	Timeout /t 5
	goto disco
:copia
	cls
	color 1F
	echo Realizando copia de Retailers...
	echo.
	echo Comprimiendo carpeta Retailers...
	echo.
	"C:\Program Files\7-Zip\7z" a -t7z -m0=lzma -mx=9 "C:\xampp\htdocs\retailscannig\Retail_Scaning_V1001_%Fecha_Backup%.7z" "C:\xampp\htdocs\retailscannig\"
	echo.
	Timeout /t 2
	cls
	color 1F
	echo Realizando copia de archivos Comprimidos al Pendrive...
	echo.
	echo Copiando al USB...
	xcopy "C:\xampp\htdocs\retailscannig\Retail_Scaning_V1001_%Fecha_Backup%.7z" "F:\BACKUP_SISTEMAS\Retailers\"
	echo.
	echo Realizando copia de Querys al Pendrive...
	echo.
	xcopy "C:\Users\ProgSenior\Documents\Navicat\SQL Server\Servers\Sql Retail\retailscannig\dbo\*.*" "F:\BACKUP_SISTEMAS\Retailers\Querys\Sql Retail\"	/K /D /H /Y
	Timeout /t 5
	CLS
	color 07
	echo Realizando copia de archivos Comprimidos al Disco D:...
	echo.
	echo Copiando al Disco Local D:...
	echo.
	rem xcopy "C:\xampp\htdocs\Retail_Scaning_V1001_%Fecha_Backup%.7z" "C:\Users\Toto\Google Drive\siscoms\" /K /D /H /Y
	rem xcopy "C:\Users\ADMIN\Desktop\*.*" "D:\Backup\" /K /D /H /Y
	CLS
	color 5
	echo Borrando Copia de archivos Comprimidos...
	echo.
	DEL "C:\xampp\htdocs\retailscannig\Retail_Scaning_V1001_%Fecha_Backup%.7z"
	echo.
	Timeout /t 5
	CLS
	EXIT
:disco
	CLS
	echo REALIZANDO COPIA AL DISCO
	cls
	color B
	echo Realizando copia de archivos Comprimidos Localmente ...
	echo Comprimiendo...
	"C:\Program Files\7-Zip\7z" a -t7z -m0=lzma -mx=9 "C:\xampp\htdocs\Retail_Scaning_V1001_%Fecha_Backup%.7z" "C:\BACKUP_SISTEMAS\Retail_Scaning.com"
	echo.
	CLS
	CLS
	color 5
	echo Borrando Copia de archivos Comprimidos...
	echo.
	DEL "C:\xampp\htdocs\Retail_Scaning_V1001_%Fecha_Backup%.7z"
	CLS
	EXIT
