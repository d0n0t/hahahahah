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
git push --set upstream origin master
git remote add origin https://github.com/${userName}/${repo}.git
git clone https://github.com/${userName}/${repo}.git
git pull https://github.com/${userName}/${repo}.git
git diff
git commit -m "."
git push
echo " "
echo "Success"
cd ..
rm -rf ${repo}
