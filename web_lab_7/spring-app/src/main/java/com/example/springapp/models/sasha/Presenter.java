package com.example.springapp.models.sasha;

import lombok.Data;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
@Data
public class Presenter {
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String fName;
	private String sName;
	private String phone;

	private Boolean sex;
}
