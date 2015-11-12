Vagrant.configure(2) do |config|
  config.vm.box = "practice"
  config.vm.box_url = "http://192.168.1.1/practice/practice.box"
  config.vm.synced_folder "html/", "/var/www/html"
  config.vm.network :forwarded_port, guest: 80, host: 8000, host_ip: "127.0.0.1"
end
