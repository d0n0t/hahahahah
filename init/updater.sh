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
git clone https://github.com/${userName}/${repo}.git

cd ..
rm -rf ${repo}
