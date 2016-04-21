#How to Clone, Change/Add files, and push back up to the server.

This first part is only for people who haven't cloned the 'AAHelper' Folder into their htdocs folder...
For all of the `$ git commands` that you see in this document, do not copy the '$' symbol! That is to show that you should be typing these git commands into a terminal or a git bash shell.

###How to Clone a repository:
1. Go to the website github.com
2. Navigate to my username (jeremyliu8) and access the AAHelper Repository.
3. click on the url right next to the HTTPS or SSH button and copy it. (If it says SSH, make sure you choose HTTPS instead.)
4. In terminal (mac) or in Git bash (windows), navigate to your XAMPP/xamppfiles/htdocs using the cd command.
5. Type in the following command:  
   `$ git clone https://github.com/jeremyliu8/AAHelper.git`
   * This is the same url that you copied
6. We are going to use the dev branch to edit all of our work. However, when you clone a repository, you automatically get set up in the master branch. In order to switch to the dev branch, type in the following command:  
   `$ git checkout -b dev origin/dev`
   * This creates a new local branch, syncs it up with the origin/dev branch on the repository, and puts you onto that branch.
7. Now type in the following command:  
  `$ git status`  
  ...aaand you are in business! It should say "Your branch is up-to-date with 'origin/dev'. nothing to commit, working directory clean"



###Now for Modifying/Adding/Deleting files!
1. If you edit, add or delete a file, git will track it!
2. Whenever you edit/add/delete a file, type in the following:  
   `$ git status`  
   and you will see a red text of the file you added/edited.

3. We need to track/stage this file, so that if the changes were not good, we can revert back to the original.
4. Type the following to add the file to the 'stage':  
   `$ git add filename.txt`
   * This stages the file to be committed, so we are not done yet! 
   * Remember to add all the files you added/changed! 
   * I am not sure if you can add them all in one line, so I just add each one individually.

5. Type the following to commit:  
   `$ git commit -m "commit description"`
   * This will commit all the files you added to the stage. 
   * The description you put inside the quotes is for everyone else collaborating to see why you made this commit. 

6. Now you have committed those changes, and that set a milestone in a way. From now on, if we create more changes and they end up not working, we can rollback to this commit and everything will be working as expected again. However! Only you can see this commit! You haven't pushed anything to the server repository yet. So far, everything you have done, cloning and modifying files, has all been done locally on your own computer. so Now, we have to push those changes so everyone can see them!  
   `$ git push`  
   Thats all you have to type! If you get an error: `"failed to push some refs.... because remote contains work you do not have locally."` See how to Pull section. If not, you were successful and now everyone can see those changes!



###How to Pull from a Repository:

1. Because Git is a way to do collaborative work, you are bound to not always have the most updated files. People will be constantly pushing and pulling new material from the repository. If you got the error above when pushing, then that means that someone else already pushed to this repository and you do not have all the updated files yet! Not to worry, because this can be fixed in a few stimple steps by typing in the following commands:  

   `$ git fetch` (This will fetch all of the files that have been updated.)  
   `$ git status` (This will show you how many commits you are behind. You can skip this step.)  
   `$ git pull` (This will pull all of the new/updated files and merge them to your local repository. This may mess something up if both people were working on the same file. I will find out more about this!)  

2. Assuming everything went well, you can now run:  
   `$ git push`  
   and everything will be pushed to the repository! Now everyone can see and pull your new/updated file to review.
3. Make sure to fetch and pull often so you can have an updated copy of everyone's work while you add your own stuff!


###How to remove all deleted files:

Sometimes when you stage for commit, you have to specifically 'add' the removed files so they all the changes will be tracked and appear on the repository. If you run the following piece of code in the terminal, it will automatically untrack all deleted files that were previously tracked:

`git ls-files --deleted -z | xargs -0 git rm `

####That should be everything you need to know! ...for now! 




