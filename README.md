# iWmall
基于Laravel5.2，Vue.js1.0的微信商城


## 环境要求
1. PHP≥5.59
2. composer:1.2.1
3. node:v6.2.0
4. npm:3.8.9


## 安装步骤
> 安装Composer Package
``` shell
git clone https://github.com/PassionZale/iMall.git
cd iMall/
cp .env.example .env
#在.env中配置好数据库连接后，继续执行以下步骤
composer update
php artisan key:generate
php artisan make:migration
```

> 安装NPM Package
``` shell
cd iMall/
npm install
gulp copyfiles
gulp mixless
npm run build
```