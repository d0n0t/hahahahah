# Get username of user
echo -n "Enter your GitHub username: "
read userName
echo " "
# Get repo of user
echo -n "Enter your GitHub repo: "
read repo
echo " "
#selection

echo " "
echo "Updating"
repo="${repo}"

rm -rf ${repo}
git init
git remote add origin https://github.com/${userName}/${repo}.git
git push --set upstream origin master
cd ..
rm -rf ${repo}
