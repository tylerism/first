Installing
=====
Installing this code is easy. Just follow the steps and you will be good.

## Updating ubuntu
1. $ apt-get update
2. $ apt-get upgrade

## Installing git
1. run the command "git"
2. if installed already skip installation
3. else sudo apt-get install git-core
4. finish installation

## Generating SSH Keys
1. cd ~/.ssh
2. ls

If you have id_rsa and id_rsa.pub but do not remember making them, then delete them and generate them.

	$ssh-keygen -t rsa -C "your_email_address_used_on_github@example.com"
	# Creates a new ssh key, using the provided email as a label
	# Generating public/private rsa key pair.
	# Enter file in which to save the key (/c/Users/you/.ssh/id_rsa): [Press enter]

	Enter passphrase (empty for no passphrase): [Type a passphrase]
	Enter same passphrase again: [Type passphrase again]



