#Accessing (Pushing to) Github without username and password --
1. Using SSH
If you need to do a push without username and password prompt, but you are always prompted, then your origin remote is pointing at the https url rather than the ssh url.
A way to skip typing my username/password when using https://github, is by changing the HTTPs origin remote which pointing to an HTTP url into an SSH url.
For example,
    https url: https://github.com/<Username>/<Project>.git
    ssh url: git@github.com:<Username>/<Project>.git
    You can do:
    git remote set-url origin git@github.com:<Username>/<Project>.git
    to change the url.

Switching remote URLs from HTTPS to SSH:
Open Terminal (for Mac and Linux users) or the command prompt (for Windows).
Change the current working directory to your local project.
List your existing remotes in order to get the name of the remote you want to change.

git remote -v
$ origin https://github.com/USERNAME/REPOSITORY.git (fetch)
$ origin https://github.com/USERNAME/REPOSITORY.git (push)
Change your remote’s URL from HTTPS to SSH with the git remote set-url command.

git remote set-url origin git@github.com:USERNAME/OTHERREPOSITORY.git(in our case- git@github.com:letusdo/testing.git)

Verify that the remote URL has changed.
    git remote -v
    $ Verify new remote URL
    $ origin git@github.com:USERNAME/OTHERREPOSITORY.git (fetch)
    $ origin git@github.com:USERNAME/OTHERREPOSITORY.git (push)

Note: Individual SSH key must be deploy onto the remote repo.

2. Using Static configuration
Static configuration of usernames for a given authentication context.
It is generally configured by adding this to your config:
    [credential “https://example.com"] username = me

Note: The password was not declared because of security reasons. It is not advisable to store your password on an unsecure storage.

3. Credential helpers to cache or store passwords, or to interact with a system password wallet or keychain.
These are external programs from which Git can request both usernames and passwords
To use a helper, you must first select one to use. Git currently includes the following helpers:

cache: Cache credentials in memory for a short period of time.
store: Store credentials indefinitely on disk.

Steps:
a.Find a helper.
    $ git help -a | grep credential-
    credential-foo

b.Read its description.
    $ git help credential-foo

c.Tell Git to use it.
    $ git config — global credential.helper foo

    [git config --global credential.helper store ]
-------------------------------------------------------------------------------------------------------------------------
Reference
1. https://help.github.com/articles/changing-a-remote-s-url/
2. http://stackoverflow.com/questions/14762034/push-to-github-without-password-using-ssh-key
3. http://git-scm.com/docs/gitcredentials
4