@servers(['web' => 'root@192.168.1.1'])

@task('foo', ['on' => 'web'])
    php codecept.phar run
@endtask