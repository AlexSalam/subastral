namespace :laravel do
  desc "Setup Laravel folder permissions"
    task :permissions do
      on roles(:app), in: :sequence, wait: 5 do
        within release_path do
          execute :php, "artisan cache:clear"
          execute :chmod, "u+x artisan"
          execute :chmod, "-R 777 bootstrap/cache"
          #execute :chown, "-R www-data:www-data bootstrap/cache"
          execute :chmod, "-R 777 storage/logs"
          #execute :chown, "-R www-data:www-data storage/logs"
          execute :chmod, "-R 777 storage/framework/sessions"
          #execute :chown, "-R www-data:www-data storage/framework/sessions"
          execute :chmod, "-R 777 storage/framework/views"
          #execute :chown, "-R www-data:www-data storage/framework/views"
          execute :chmod, "-R 777 storage/framework/cache"
          #execute :chown, "-R www-data:www-data storage/framework/cache"
       end
     end
   end

  desc "Optimize Laravel Class Loader"
  task :optimize do
    on roles(:app), in: :sequence, wait: 5 do
      within release_path do
        execute :php, "artisan clear-compiled"
        execute :php, "artisan optimize"
      end
    end
  end

  desc "Run Laravel Artisan migrate task."
  task :migrate do
    on roles(:app), in: :sequence, wait: 5 do
      within release_path do
       execute :php, "artisan migrate --force"
      end
    end
  end
end