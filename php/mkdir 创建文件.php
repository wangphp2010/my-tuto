<?php


 
bool mkdir ( string pathname [, int mode [, bool recursive [, resource context]]] )
参数		描述
path		必需。规定要创建的目录的名称。
mode		必需。规定权限。默认是 0777。
recursive	必需。规定是否设置递归模式。
context	必需。规定文件句柄的环境。Context 是可修改流的行为的一套选项。
只能在已经存在的目录中创建创建文件夹（即父级必须有才行）。 

mkdirs() 
可以在不存在的目录中创建文件夹。诸如：a/b,既可以创建多级目录。                

dirname()是返回路径中的目录部分。

is_dir()用于判断给出的文件名是否是一个有效的目录  


touche()