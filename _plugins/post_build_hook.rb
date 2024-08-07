Jekyll::Hooks.register :site, :post_write do |site|
  system("sh _scripts/post_sym_ln.sh")
  system("sh _site/resources/advguild/genhtml.sh")
end
