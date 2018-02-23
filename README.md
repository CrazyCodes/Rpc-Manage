MyService 是一款服务治理架构的后台管理系统
----
# Step 1
```
git clone https://github.com/CrazyCodes/Rpc-Manage.git
```
# Step 2
```
cp .env.example .env
```
### 配置
```
DB_HOST=dev_db
DB_PORT=3306
DB_DATABASE=govern
DB_USERNAME=root
DB_PASSWORD=root

XML_PRC_URL=http://admin:admin@127.0.0.1:8888/RPC2 // Supervisor通信地址
```
### 迁移数据表
```
php artisan migrate
composer dump-autoload
```

### 数据填充
```
php artisan db:seed
```

# Step 3
访问你的地址

# 详细文档

[https://www.kancloud.cn/crazy/myservice/530309]
