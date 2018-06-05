namespace :deploy do
    after :finishing, :env do

        `scp `

   end

end