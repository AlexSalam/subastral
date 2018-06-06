namespace :lumen do
  desc "Run lumen Artisan migrate task."
  task :migrate do
    on roles(:app), in: :sequence, wait: 5 do
      within release_path do
        execute :php, "artisan --env=#{fetch(:lumen)} migrate --force"
      end
    end
  end

   desc 'Upload dotenv file for release.'
       task :upload_dotenv_file do
           on roles(:app), in: :sequence, wait: 5 do
             if File.exists? fetch(:lumen_dotenv_file)
               upload! fetch(:lumen_dotenv_file), "#{release_path}/.env"
             else
               puts "Error: Your deployment directory must contain the following file: " + fetch(:lumen_dotenv_file);
               raise
             $end
           end
       end
     end
end