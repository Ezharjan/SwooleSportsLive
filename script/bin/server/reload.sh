echo "loading..."
pid=`pidof live_master`
echo $pid
kill -USR1 $pid
echo "loading success"