# 開発用環境構築

## Overview

dockerを利用し開発環境を構築します。  
下記の環境が構築できます。  
・Apache2.4  
・php8.2 xdebug  
・MSSqlServer  

dockerをインストール後コマンドプロンプトを開いて  
docker-composer up 
  
Web frontend  
http://localhost:8001/ -> ./www/web/public/  
Web backend(api)  
http://localhost:8002/ -> ./www/web_api/public/  
admin frontend  
http://localhost:8003/ -> ./www/admin/public/  
admin backend(api)   
http://localhost:8004/ -> ./www/admin_api/public/   

www をvscodeで開くとxdebugが動きます

SqlServer接続情報  
host=mssql  
user=sa  
password=Password@sa  

wsl2領域にファイルを置かないと激遅なので注意  
\\\wsl.localhost\Ubuntu\home 以下に置くことを推奨
