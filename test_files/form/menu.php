<html>
  <body>
  <form action="cmd.php" method="post" target="iframe">
    <input type="submit" name="cmd" value="sysinfo" />    &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitlog" />     &nbsp;&nbsp;
    <!--input type="submit" name="cmd" value="gitdiff" /> &nbsp;&nbsp;
    <input type="text" name="diffa" size="10">            &nbsp;&nbsp;
    <input type="text" name="diffb" size="10">            &nbsp;&nbsp;
    -->
    <input type="submit" name="cmd" value="hello" />      &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitstatus" />  &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitpush" />    &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitcommit" />  &nbsp;&nbsp;
    <input type="text" name="commit_message" size="40">   &nbsp;&nbsp;
    <hr/>
  </form>
  <iframe id="iframe" height=5000 width=1024 name="iframe" frameborder=0 src="blank.html">
  </iframe>
  </body>
</html>