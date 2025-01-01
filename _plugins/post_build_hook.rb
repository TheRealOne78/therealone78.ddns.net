Jekyll::Hooks.register :site, :post_write do |site|
  system("sh _scripts/post_sym_ln.sh")
  system("cd ./_site/resources/advguild/ && sh genhtml.sh")
  system("cd ./_site/resources/npm && npm install")
end
