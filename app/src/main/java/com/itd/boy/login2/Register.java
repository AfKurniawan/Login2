package com.itd.boy.login2;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Register extends Activity implements View.OnClickListener  {


    Button bRegister;
    EditText etName, etPassword, etAge, etUsername;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        etName = (EditText) findViewById(R.id.etName);
        etAge = (EditText) findViewById(R.id.etAge);
        etUsername = (EditText) findViewById(R.id.etUsername);
        etPassword = (EditText) findViewById(R.id.etPassword);
        bRegister.setOnClickListener(this);

    }

    @Override
    public void onClick(View v) {

        switch (v.getId()){
            case R.id.bRegister:
                String name = etName.getText().toString();
                int age =  Integer.parseInt(etAge.getText().toString());
                String username = etUsername.getText().toString();
                String password = etPassword.getText().toString();

                User registerDetail = new User(name,age,username,password) ;
                break;
        }
    }
}
