appĿ¼�����Ӧ�õĺ��Ĵ���  [P.S:��ܵĺ��Ĵ���/vendor/laravel/framework]
  app/Console: ���Ӧ�������Զ����Artisan����
    php artisan make:command 
  app/Exceptions: Ӧ�õ��쳣������
          ��Handler�����Զ����쳣
  app/Http: ��������Controllers�����м����Middleware����������ȼ�������ͨ��Web����Ӧ�õ�������
  app/Models: ��������ݿ⽻����ģ����
    php artisan make:model Models/className
  app/Providers: Ӧ�õ����з����ṩ��[�����ṩ����Ӧ�����������а󶨷���������ע���¼��Լ�ִ����������Ϊ��������������������׼��������]
  
  [app/Broadcasting: Ӧ����������й㲥Ƶ����
     php artisan make:channel
   app/Events: ����¼��ࣨ���ڸ�֪Ӧ����������ĳ���¼�����������ṩ���ġ�����Ĵ�����ƣ�
     php artisan make:event
   app/Jobs: ��Ŷ�������Ӧ���е�����ɱ����͵����У�Ҳ���ڵ�ǰ���������������ͬ��ִ��
     php artisan make:job
   app/Listeners: �����¼����ࣨ�¼�������������һ���¼����ṩ�Ը��¼����������Ӧ�߼�
     php artisan make:listener
   app/Mail: Ӧ�������ʼ������{��ʹ��Mail::send����}
     php artisan make:mail
   app/Notification: Ӧ�÷��͵�����֪ͨ
     php artisan make:notification
   app/Policies: Ӧ�����е���Ȩ������,�����ж��û��Ƿ���Ȩ��ȥ����ָ����Դ
     php artisan make:policy
   app/Rules: Ӧ�õ��Զ�����֤������������ڵ��������з�װ���ӵ���֤�߼�
     php artisan make:rule
   ]

bootstrapĿ¼�����ڿ�ܵ��������Զ���������
  cache�ļ���Ϊ�������������ɵ��ļ���·�ɺͷ��񻺴��ļ���

configĿ¼��Ӧ�����е������ļ�

databaseĿ¼�����ݿ�Ǩ���ļ�������ļ�

publicĿ¼��Ӧ������ļ�index.php ��ǰ����Դ�ļ���images, js, css��

resourcesĿ¼��Ӧ����ͼ�ļ���views����δ�����ԭ��ǰ����Դ�ļ���assets���Լ����ػ������ļ���lang��

routesĿ¼��Ӧ�ö��������·��
  web.php: ������·�ɶ�λ��RouteServiceProvider�������web�м����Լ���У�֧�� Session��CSRF �����Լ� Cookie ���ܹ��ܣ����Ӧ�������ṩ��״̬�ġ�RESTful ���� API����ô·�ɻ����϶�Ҫ������ web.php �ļ���
  api.php: ������·��λ��api�м����Լ���У�֧��Ƶ�����ƹ��ܣ���Щ·������״̬�ģ���������ͨ����Щ·�ɽ���Ӧ����Ҫͨ�� token ������֤���Ҳ��ܷ��� Session ״̬��
  console.php : ���ڶ������л��ڱհ��Ŀ���̨���ÿ���հ������󶨵�һ������̨����������������� IO �������н�������������ļ��������� HTTP ·�ɣ������������˻��ڿ���̨��Ӧ����ڣ�·�ɣ���
  channels.php: ����ע��Ӧ��֧�ֵ������¼��㲥Ƶ��

storageĿ¼��������Bladeģ�塢�����ļ���session���ļ������Լ������ɿ�����ɵ��ļ�
  storage/app: ���Ӧ�����ɵ��ļ�
    storage/app/public: ����û����ɵ��ļ�
  storage/framework: ��ſ�����ɵ��ļ��ͻ���
  storage/logs: ���Ӧ�õ���־�ļ�

testsĿ¼���Զ��������ļ�
  ÿһ�������඼��Test��ͷ��ͨ��phpunit(or php vendor/bin/phpunit)�������в���

vendorĿ¼��Ӧ������ͨ��Composer���ص�����