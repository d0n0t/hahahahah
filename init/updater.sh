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
git clone https://github.com/${userName}/${repo}.git
cd ${repo}
rm -rf ${repo}
git pull https://github.com/${userName}/${repo}.git
git diff
git commit -m "😎"
git push
echo " "
echo "Updated"
cd ..
rm -rf ${repo}
