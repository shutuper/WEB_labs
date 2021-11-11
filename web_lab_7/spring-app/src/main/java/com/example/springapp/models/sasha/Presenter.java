package com.example.springapp.models.sasha;

import lombok.Data;

import javax.persistence.*;

@Entity
@Data
public class Presenter {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String fName;
	private String sName;
	private String phone;


	private String sex;

	public Presenter(String fName, String sName, String phone, String sex) {
		this.fName = fName;
		this.sName = sName;
		this.phone = phone;
		this.sex = sex;
	}

	public Presenter() {

	}
}
