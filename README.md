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

##Add your SSH key to GitHub

Run the following code to copy the key to your clipboard.

	clip < ~/.ssh/id_rsa.pub
	# Copies the contents of the id_rsa.pub file to your clipboard
	Alternatively, using your favorite text editor, you can open the ~/.ssh/id_rsa.pub file and copy the contents of the file manually.

1. Go to your Account Settings
2. SSH Keys menuClick "SSH Keys" in the left sidebar
3. SSH Key buttonClick "Add SSH key"
4. The key fieldPaste your key into the "Key" field
5. The Add key buttonClick "Add key"
6. Confirm the action by entering your GitHub password	
