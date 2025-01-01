#!/usr/bin/env ruby

Jekyll::Hooks.register :site, :before_build do |site|
  puts "Running npm install..."
  system("cd resources/npm && npm install")
end
