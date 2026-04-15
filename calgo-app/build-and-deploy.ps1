# Build Angular sidebar and deploy to admin/sidebar-dist/
Set-Location $PSScriptRoot

# Build
npx ng build --configuration production --output-hashing none

# Wrap in IIFE to prevent $ variable from leaking to global scope and conflicting with jQuery
$mainJs = "dist\sidebar-app\browser\main.js"
$content = Get-Content $mainJs -Raw
$wrapped = "(function(){`n" + $content + "`n})();"
Set-Content $mainJs -Value $wrapped -NoNewline

# Copy to admin
Copy-Item -Force $mainJs "..\admin\sidebar-dist\main.js"

Write-Host "Build and deploy complete."
