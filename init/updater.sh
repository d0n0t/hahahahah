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
git clone https://github.com/${userName}/${repo}.git
	cd ${repo}
#updater
echo " "
echo "Updating"
git pull https://github.com/d0n0t/hahahahah.git
git diff
git commit -m "."
git push
echo " "
echo "Success"
cd ..
rm -rf ${repo}
