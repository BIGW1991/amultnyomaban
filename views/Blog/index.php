                    <nav>
                        <ul>
                            <li><a href="<?php echo URL; ?>Blog">Blog</a></li><li><a href="<?php echo URL; ?>Forum">Fórum</a></li><li><a href="<?php echo URL; ?>Idovonal">Idővonal</a></li>
                        </ul>
                   </nav>
                </header>
                <div class="MainContent">
                    <div class="Content">
                        <?php echo $this->Blog; ?>
                    </div>    
                </div>
                <aside class="Top-Sidebar">
                    <article>
                        <?php echo $this->BlogArchives;?>
                    </article>
                </aside>
                <aside class="Middle-Sidebar">
                    <article>
                        <?php echo $this->LogInInterface;?>
                    </article>
                </aside>
                <aside class="Bottom-Sidebar">
                    <article>
                        <?php echo $this->Connections;?>
                    </article>
                </aside>
