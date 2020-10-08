echo -n "Github Username: "
read userName
echo " "
git config --global user.name "${userName}"

echo -n "Github Email : "
read eMail
echo " "
git config --global user.email ${eMail}
omit --global
