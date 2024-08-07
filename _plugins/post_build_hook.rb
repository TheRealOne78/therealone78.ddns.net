Jekyll::Hooks.register :site, :post_write do |site|
  system("sh _scripts/post_sym_ln.sh")
  system("sh resources/advguild/advguild-sync.sh")
end
