@echo off
cls
COLOR B0
mode con:cols=80 lines=8
TITLE UNIFORM SERVER - Stop MySQL Service

rem ###################################################
rem # Name: mysql_stop_service.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 15-8-2011
rem ##################################################
echo.

rem --- working directory current folder 
pushd %~dp0

rem --- Change to UniServer root folder and save as variable 
cd ..\..
set ROOT=%cd%

rem --- Change working directory to MySQL bin folder
cd %ROOT%\usr\local\mysql\bin

rem ### VBScript ###
:'--- Get environment variables
:Set objShell = CreateObject("WScript.Shell")               'Create shell object
:Set colEnvironment = objShell.Environment("PROCESS")       'Get list of environment variables
:US_ROOT       = colEnvironment("ROOT")                     'Get Root path variable
:US_CONFIG     = US_ROOT & "\uni_con\config_tracker.ini"    'Config path

:'--- Read config file and search for service name
: Set objFSO = CreateObject("Scripting.FileSystemObject")   'Create file obj
: Set objFile = objFSO.OpenTextFile(US_CONFIG, 1)           'Open file

: Do Until objFile.AtEndOfStream                            'Read to end of file
:  strLine = objFile.ReadLine                               'Get line from file
:   If InStr(strLine,"mysql_service_name =") Then           'Match found
:     strLine = Replace(strLine,"mysql_service_name =","")  'Remove
:     service_name = trim(strLine)                          'Clean line  
:     Exit Do                                               'Nothing else to do
:   End If
: Loop             'Read another line
: objFile.Close    'Finished with file hence close

:Set objFSO           = Nothing   'Cleanup Object
:Set objFile          = Nothing 

:wscript.echo service_name
rem ### END VBScript ###

rem -- run above script and get string returned
findstr "^:" "%~sf0">temp.vbs
for /f "delims=" %%N in ('cscript //nologo temp.vbs') do set service_name=%%N
del temp.vbs

rem -- Install service
echo.
net stop "%service_name%"
echo.

pause
rem --- restore original working directory
popd
