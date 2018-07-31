app目录：存放应用的核心代码  [P.S:框架的核心代码/vendor/laravel/framework]
  app/Console: 存放应用所有自定义的Artisan命令
    php artisan make:command 
  app/Exceptions: 应用的异常处理器
          在Handler类中自定义异常
  app/Http: 控制器（Controllers）、中间件（Middleware）、表单请求等几乎所有通过Web进入应用的请求处理
  app/Models: 存放与数据库交互的模型类
    php artisan make:model Models/className
  app/Providers: 应用的所有服务提供者[服务提供者在应用启动过程中绑定服务到容器、注册事件以及执行其他任务为即将到来的请求处理做好准备工作。]
  
  [app/Broadcasting: 应用所需的所有广播频道类
     php artisan make:channel
   app/Events: 存放事件类（用于告知应用其他部分某个事件发生情况并提供灵活的、解耦的处理机制）
     php artisan make:event
   app/Jobs: 存放队列任务，应用中的任务可被推送到队列，也可在当前请求的生命周期内同步执行
     php artisan make:job
   app/Listeners: 处理事件的类（事件监听器）接收一个事件并提供对该事件发生后的响应逻辑
     php artisan make:listener
   app/Mail: 应用所有邮件相关类{可使用Mail::send调用}
     php artisan make:mail
   app/Notification: 应用发送的所有通知
     php artisan make:notification
   app/Policies: 应用所有的授权策略类,用于判断用户是否有权限去访问指定资源
     php artisan make:policy
   app/Rules: 应用的自定义验证规则对象，用于在单个对象中封装复杂的验证逻辑
     php artisan make:rule
   ]

bootstrap目录：用于框架的启动和自动载入配置
  cache文件：为提升性能所生成的文件（路由和服务缓存文件）

config目录：应用所有的配置文件

database目录：数据库迁移文件及填充文件

public目录：应用入口文件index.php 和前端资源文件（images, js, css）

resources目录：应用视图文件（views）和未变异的原生前端资源文件（assets）以及本地化语言文件（lang）

routes目录：应用定义的所有路由
  web.php: 包含的路由都位于RouteServiceProvider所定义的web中间件组约束中，支持 Session、CSRF 保护以及 Cookie 加密功能，如果应用无需提供无状态的、RESTful 风格的 API，那么路由基本上都要定义在 web.php 文件中
  api.php: 包含的路由位于api中间件组约束中，支持频率限制功能，这些路由是无状态的，所以请求通过这些路由进入应用需要通过 token 进行认证并且不能访问 Session 状态。
  console.php : 用于定义所有基于闭包的控制台命令。每个闭包都被绑定到一个控制台命令并且允许与命令行 IO 方法进行交互，尽管这个文件并不定义 HTTP 路由，但是它定义了基于控制台的应用入口（路由）。
  channels.php: 用于注册应用支持的所有事件广播频道

storage目录：编译后的Blade模板、基于文件的session、文件缓存以及其他由框架生成的文件
  storage/app: 存放应用生成的文件
    storage/app/public: 存放用户生成的文件
  storage/framework: 存放框架生成的文件和缓存
  storage/logs: 存放应用的日志文件

tests目录：自动化测试文件
  每一个测试类都以Test开头，通过phpunit(or php vendor/bin/phpunit)命令运行测试

vendor目录：应用所有通过Composer加载的依赖