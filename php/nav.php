              <?php
                 if (isset($_SESSION['my_email_address'])){
                 echo "
              <ul>
                  <li>
                      <a href='index.php' class='home'>Home</a>
                  </li>
                  <li>
                      <a href='galaxies.php' class='products'>Products</a>
                  </li>
                  <li>
                      <a href='account.php' class='account'>Account</a>
                  </li>
                  <li>
                      <a href='logout.php' class='logout'>Log Out</a>
                  </li>
              </ul>";
                } 
                else 
                {
                    echo "
                     <ul>
                  <li>
                      <a href='index.php' class='home'>Home</a>
                  </li>
                  <li>
                      <a href='galaxies.php' class='products'>Products</a>
                  </li>
                  <li>
                      <a href='main_login.php' class='login'>Login</a>
                  </li>
                  <li>
                      <a href='registration.php' class='sign_up'>Sign Up</a>
                  </li>
              </ul>";
                }
                ?>