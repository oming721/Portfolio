package com.example.bussystem

import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import androidx.appcompat.app.AppCompatActivity

class MainActivity3 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main3)


        val intent = intent
        val name = intent.getStringExtra("name")
        val age = intent.getStringExtra("age")
        val email = intent.getStringExtra("email")


        val textname = findViewById<EditText>(R.id.textname)
        val textage = findViewById<EditText>(R.id.textage)
        val textemail = findViewById<EditText>(R.id.textemail)

        textname.setText(name)
        textage.setText(age)
        textemail.setText(email)


        var btn_up = findViewById<Button>(R.id.btn_up)
        btn_up.setOnClickListener{
            val i = Intent()
            i.putExtra("textname",textname.text.toString())
            i.putExtra("textage",textage.text.toString())
            i.putExtra("textemail",textemail.text.toString())
            setResult(RESULT_OK, i)
            finish()
        }

        val btn_cancel = findViewById<Button>(R.id.btn_cancel)
        btn_cancel.setOnClickListener{
            finish()
        }
    }
}

