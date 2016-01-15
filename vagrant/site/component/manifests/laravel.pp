class component::laravel (
  $path       = hiera('path', '/var/www/app_name'),
  $vhost      = hiera('vhost', 'app-name.dev'),
  $vhost_port = 80,
  $env        = hiera('env', 'dev'),
) {

  ## create default vhost
  nginx::resource::vhost { "${vhost}-${vhost_port}-laravel" :
    ensure      => present,
    server_name => [$vhost],
    www_root    => "${path}/public",
    listen_port => $vhost_port,
    try_files => ['try_files $uri $uri/ /index.php?$query_string'],
  }
  ## try files for queries
#  nginx::resource::location { 'query-redirect':
#    location  => '/',
#    www_root  => "${path}/public",
#    vhost     => "${vhost}-${vhost_port}-laravel",
#    try_files => ['try_files $uri $uri/ /index.php?$query_string'],
#  }

  ## send .php to fpm
  nginx::resource::location { 'laravel-php-redirect':
    location            => '~ \.php$',
    fastcgi             => '127.0.0.1:9000',
    fastcgi_split_path  => '^(.+\.php)(/.+)$',
    www_root            => "${path}/public",
    vhost               => "${vhost}-${vhost_port}-laravel",
  }

#  nginx::resource::location { 'laravel-redirect-ht-redirect':
#    location      => '~ /\.ht',
#    location_deny => ['all'],
#    www_root      => "${path}/public",
#    vhost         => "${vhost}-${vhost_port}-laravel",
#  }
}
