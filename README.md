Installing
=====
Installing this code is easy. Just follow the steps and you will be good.

## Updating ubuntu
	$ apt-get update
	$ apt-get upgrade

## Installing git
	$ git

1. if installed already skip installation
2. else sudo apt-get install git-core
3. finish installation

## Generating SSH Keys
	$ cd ~/.ssh
	$ ls

If you have id_rsa and id_rsa.pub but do not remember making them, then delete them and generate them.

	$ssh-keygen -t rsa -C "your_email_address_used_on_github@example.com"
	# Creates a new ssh key, using the provided email as a label
	# Generating public/private rsa key pair.
	# Enter file in which to save the key (/c/Users/you/.ssh/id_rsa): [Press enter]

	Enter passphrase (empty for no passphrase): [Type a passphrase]
	Enter same passphrase again: [Type passphrase again]

##Add your SSH key to GitHub

Run the following code to copy the key to your clipboard.

	$ clip < ~/.ssh/id_rsa.pub
	# Copies the contents of the id_rsa.pub file to your clipboard
	Alternatively, using your favorite text editor, you can open the ~/.ssh/id_rsa.pub file and copy the contents of the file manually.

1. Go to your Account Settings
2. SSH Keys menuClick "SSH Keys" in the left sidebar
3. SSH Key buttonClick "Add SSH key"
4. The key fieldPaste your key into the "Key" field
5. The Add key buttonClick "Add key"
6. Confirm the action by entering your GitHub password	

##Test everything out

To make sure everything is working you'll now SSH to GitHub. When you do this, you will be asked to authenticate this action using your password, which for this purpose is the passphrase you created earlier. Don't change the git@github.com part. That's supposed to be there.

	$ ssh -T git@github.com
	# Attempts to ssh to github

	The authenticity of host 'github.com (207.97.227.239)' can't be established.
	# RSA key fingerprint is 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48.
	# Are you sure you want to continue connecting (yes/no)?
	Don't worry, this is supposed to happen. Verify that the fingerprint matches the one here and type "yes".

	# Hi username! You've successfully authenticated, but GitHub does not
	# provide shell access.
