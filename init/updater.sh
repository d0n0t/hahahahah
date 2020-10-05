
# Get username of user
echo -n "Enter your GitHub username: "
read userName
echo " "
# Get repo of user
echo -n "Enter your GitHub repo: "
read repo
echo " "

#selection
repo="${repo}"

rm -rf ${repo}
git clone git clone http://github.com/${userName}/${repo}.git
	cd ${repo}
#updater
echo " "
echo "Updating your USERGE-X"
git pull http://github.com/${userName}/${repo}.git
git diff
git commit -m "."
git push
echo " "
echo "Success"
cd ..
rm -rf ${repo}
