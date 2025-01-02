# PHP Notice:  A non well formed numeric value encountered
This example demonstrates a common PHP error that occurs when performing arithmetic operations with strings that cannot be converted to numbers.  PHP will issue a Notice, which might lead to unexpected results. In this case we attempt to add the string '4a' to the sum which is treated as 0 causing the result to be incorrect.  The solution shows how to handle such cases robustly.